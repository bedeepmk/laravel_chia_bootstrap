<?php

/**
 * 전역 함수 모음
*/
use Illuminate\Support\Facades\Log;


/**
 * 모바일 pc분기 해서 경로 리턴
 * 중간에 반응형으로 변경되서 필요없음.
 * @param $path
 * @return string
 */
function getCurDevicePath($path)
{
//    $agent = new Jenssegers\Agent\Agent();
//    if($agent->isMobile()){
//        $newPath = "mobile.".$path;
//    }else {
//        $newPath = "page.".$path;
//    }
    $newPath = "page." . $path;
    return $newPath;
}

/**
 * 모바일 여부
 * @return bool
 */
function isMobile(){
    $agent = new Jenssegers\Agent\Agent();
    return $agent->isMobile();
}

/**
 * 관리자아이디 여부 => 관리자 롤 코드로 구분할것 아이디로 구분을 하면 매우 비효율적이다.
 * @return bool
 */
function isAdmin()
{
    if (\Illuminate\Support\Facades\Auth::check()) {
        if (\Illuminate\Support\Facades\Auth::user()->id == 'admin') {
            return true;
        }
    }
    return false;
}

/**
 * 관리자, 직원인지
 * 관리자 admin -> admin, 직원 admin2 -> worker
 *
 * @return string
 */
function getIdRole()
{
    if (\Illuminate\Support\Facades\Auth::check()) {
        $id = \Illuminate\Support\Facades\Auth::user()->id;
        if ($id == 'admin') {
            return 'admin';
        }else if($id == 'admin2'){
            return 'worker';
        }else if($id == 'admin3'){
            return 'worker2';
         }else if($id == 'admin4'){
            return 'worker3';
        }
    }
    return '';
}

/**
 * 은행코드별 은행명 리턴
 * @param $bankCode
 * @return mixed
 */
function bankCodeToBankName($bankCode)
{
    $codeNameMap = [
        "02" => '산업은행',
        "03" => '기업은행',
        "04" => '국민은행',
        "05" => '외환은행',
        "07" => '수협중앙회',
        "08" => '수출입은행',
        "10" => '농협중앙회',
        "20" => '우리은행',
        "21" => '신한은행',
        "23" => 'SC제일은행',
        "25" => '하나은행',
        "27" => '한국씨티은행',
        "31" => '대구은행',
        "32" => '부산은행',
        "34" => '광주은행',
        "35" => '제주은행',
        "37" => '전북은행',
        "39" => '경남은행',
        "45" => '새마을금고',
        "48" => '신협중앙회',
        "50" => '상호신용금고',
        "54" => '홍콩상하이은행',
        "71" => '우체국',
        "209" => '동양종합금융증권',
        "230" => '미래에셋증권',
        "238" => '대우증권',
        "240" => '삼성증권',
        "243" => '한국투자증권',
        "247" => '우리투자증권',
        "262" => '하이투자증권',
        "263" => '에이치엠씨투자증권',
        "266" => '에스케이증권',
        "267" => '대신증권',
        "269" => '한화증권',
        "270" => '하나대투증권',
        "280" => '유진투자증권',
        "281" => '현대증권',
        "287" => '메리츠증권',
        "289" => '엔에이치투자증권',
    ];
    if(array_key_exists($bankCode,$codeNameMap) !== FALSE)
        return $codeNameMap[$bankCode];
    return $bankCode;
}

/**
 * 이름, 주민번호 중복여부체크 =>쿼리 변경할 것 
 * @param $name 
 * @param $sn
 * @return int
 */
function checkRegistDuplicate($name, $sn){
    $memberCnt = DB::table('tb_members')->where('name', '=', $name)->where('birthday_date', '=', $sn)->count(['*']);
    $isExist = 0;
    if((int)$memberCnt > 0) $isExist = 1;
    return $isExist;
}



/**
 * 동일계좌존재여부확인 =>쿼리변경
 * @param 현재아이디,넘어온계좌
 * @return bool
 */
function twoAccount($id,$bankAccount){

    $query = "select bank_account_name from tb_members where id  <> ? and bank_account = ?";

    $check = DB::select($query, [$id, $bankAccount]);
    if($check){
            return true;
    }else{
            return false; 
    }    
}

/**
 * 회원과 계좌명의자가 같은지 확인=>쿼리변경
 * @param 현재아이디,넘어온계좌명의
 * @return bool
 */
function nameEqualAccount($id,$bankAccountName){
    $memberBankNickName = DB::table('tb_members')
            ->where('id', '=', $id )
            ->first(['bank_account_name']);
    if($memberBankNickName){
        if($memberBankNickName->bank_account_name != $bankAccountName){
            return false;
        }else{
            return true;
        }
    } 
}

/**
 * 회원과 계좌명의자가 같은지 확인=>쿼리변경
 * @param 현재아이디,넘어온계좌명의
 * @return bool
 */
function fullEqualAccount($id,$Code,$Account,$AccountName){
    $bacnkInfo = DB::table('tb_members')
            ->where('id', '=', $id )
            ->first(['bank_account_name','bank_code','bank_account']);
    if($bacnkInfo){
        if($bacnkInfo->bank_account_name == $AccountName && $bacnkInfo->bank_code == $Code && $bacnkInfo->bank_account == $Account){
            return true;
        }else{
            return false;
        }
    } 
}



/**
 * 긴급거래점검 띄우기 =>쿼리변경
 * @return bool true 일경우 잠금
 */
function isEmergency(){
    $setting = DB::table('tb_settings')->where('setting_name', '=', 'emergency')->first(['setting_value']);

    //긴급점검
    if($setting->setting_value == '1') return true;

    return false;
}

/**
 * 입금제어함수=>쿼리변경
 * @return bool true 일경우 잠금
 */
function isMoneyDepositCtl($virtual_flag){

    //정상 플래그가 아닌경우는 에러코드 반환을위한 true
    if($virtual_flag == '') return true;

    $money_both = DB::table('tb_settings')->where('setting_name', '=', 'money_both')->first(['setting_value']);
    $money_vir1 = DB::table('tb_settings')->where('setting_name', '=', 'money_vir1')->first(['setting_value']);
    $money_vir2 = DB::table('tb_settings')->where('setting_name', '=', 'money_vir2')->first(['setting_value']);
    $money_old = DB::table('tb_settings')->where('setting_name', '=', 'money_old')->first(['setting_value']);
    $money_new = DB::table('tb_settings')->where('setting_name', '=', 'money_new')->first(['setting_value']);
    $money_begin = DB::table('tb_settings')->where('setting_name', '=', 'money_begin')->first(['setting_value']);

    //입출금 모두 제한
    if($money_both->setting_value == '1')  return true;
    //가상계좌 1 입금제한
    if($virtual_flag == 'virtualmember' && $money_vir1->setting_value == '1') return true;
    //가상계좌 2 입금제한
    if($virtual_flag == 'virtualmember2' && $money_vir2->setting_value == '1') return true;
    //1등급유저 입금제한
    if($virtual_flag == 'grade1member' && $money_old->setting_value == '1') return true;
    //2등급유저 입금제한
    if($virtual_flag == 'grade2member' && $money_new->setting_value == '1') return true;
    //3등급유저 입금제한
    if($virtual_flag == 'grade3member' && $money_begin->setting_value == '1') return true;


    return false;
}

/**
 * 출금제어함수=>쿼리변경
 * @return bool true 일경우 잠금
 */
function isMoneyWithCtl(){

    $money_both = DB::table('tb_settings')->where('setting_name', '=', 'money_both')->first(['setting_value']);
    $money_with = DB::table('tb_settings')->where('setting_name', '=', 'money_with')->first(['setting_value']);
    
    //입출금 모두 제한
    if($money_both->setting_value == '1')  return true;
    //입출금 모두 제한
    if($money_with->setting_value == '1')  return true;
    
    
    return false;
}


/**
 * 긴급입출금제한점검 띄우기 =>쿼리변경
 * @return bool true 일경우 잠금
 */
function isMoneyEmergency(){
    $setting = DB::table('tb_settings')->where('setting_name', '=', 'moneylimit')->first(['setting_value']);

    //긴급점검
    //if($setting->setting_value == '1') return true;

    return $setting->setting_value;
}

/**
 * 긴급전체제한점검 띄우기=>쿼리변경
 * @return bool true 일경우 잠금
 */
function isTotalEmergency(){
    $setting = DB::table('tb_settings')->where('setting_name', '=', 'inspection')->first(['setting_value']);

    //긴급점검
    if($setting->setting_value == '1') return true;

    return false;
}

/**
 * 로그인 아이디가 이 함수가 사용되는곳에 권한이 있는지 체크(지점, 지사)
 * @param $branchIdx 지점, 지사 idx
 * @return bool
 */
function checkPermissionOnBranchIdx($branchIdx){

    $isAuthorized = false;
      
    $level = \Illuminate\Support\Facades\Auth::user()->level;
    
    if(!isset($level)){
        return $isAuthorized;
    }  

    //관리자일때
    if(Auth::user()->id == 'admin'){
        $isAuthorized = true;
        return $isAuthorized;
    }else if(Auth::user()->id == config('project.fxone_id')){
        $isAuthorized = (DB::table('tb_members')->where('belongs_to', '=', 2)->where('idx', '=', $branchIdx)->count()) > 0;
        return $isAuthorized;
    }

    //지사일때
    if($level == 1){
        $isAuthorized = (DB::table('tb_members')->where('parent_idx', '=', \Illuminate\Support\Facades\Auth::id())->where('idx', '=', $branchIdx)->count()) > 0;
    //지점일때
    }else if($level == 2){
        if($branchIdx == \Illuminate\Support\Facades\Auth::id()){
            $isAuthorized = true;
        }
    //부본사일때    
    }else if($level == 3){
        $checkLevel = DB::table('tb_members')->where('idx', '=', \Illuminate\Support\Facades\Auth::id())->first(['level']);
        if($checkLevel && $checkLevel->level == '3'){
            $isAuthorized = true;
        }
    //총판일때     
    }else if($level == 4){
         $checkLevel = DB::table('tb_members')->where('idx', '=', \Illuminate\Support\Facades\Auth::id())->first(['level']);
        if($checkLevel && $checkLevel->level == '4'){
            $isAuthorized = true;
        }
    }

    return $isAuthorized;
}

/**
 * 로그인한 아이디가 이 함수가 사용되는곳에 권한이 있는지 체크(회원관련)
 * @param $member_idx
 * @return bool
 */
function checkPermissionOnMemberIdx($member_idx){
    $isAuthorized = false;
     
    $level = \Illuminate\Support\Facades\Auth::user()->level;
    if(!isset($level)){
        return $isAuthorized;
    }
   
    //관리자일때
    if(Auth::user()->id == 'admin'){
        $isAuthorized = true;
        return $isAuthorized;

    //fxone일때
    }else if(Auth::user()->id == config('project.fxone_id')){
        $isAuthorized = DB::table('tb_members as A')
            ->where('idx', '=', $member_idx)
            ->whereIn('recommend_idx', function($subQuery){
                $subQuery->from('tb_members')->where('belongs_to', '=', '2')->select('idx');
            })->count() > 0;
        return $isAuthorized;
    }

    //지사일경우
    if($level == 1){
        $isAuthorized = (\Illuminate\Support\Facades\DB::table('tb_members')->where('idx', '=', $member_idx)->whereIn('recommend_idx', function($subQuery){
                $subQuery->from('tb_members')->where('parent_idx', '=', \Illuminate\Support\Facades\Auth::id())->select(['idx']);
            })->count()) > 0;
        //지점일경우
    }else if($level == 2){
        $isAuthorized = (\Illuminate\Support\Facades\DB::table('tb_members')->where('idx', '=', $member_idx)->where('recommend_idx', '=', \Illuminate\Support\Facades\Auth::id())->count()) > 0;
    }else if($level == 3){
        $query="select * from tb_members where idx = (
        select bubonsa_idx from tb_members where idx = (
        select chongpan_idx from Tb_Members where idx = (
        select parent_idx from tb_members where idx = (
        select recommend_idx from tb_members where idx = ?
        ))))
        and idx = ?";
        
        $query_chk = DB::select($query,[$member_idx,\Illuminate\Support\Facades\Auth::id()]);
        
        if($query_chk){
            $isAuthorized = true;
        }
        //$isAuthorized = (\Illuminate\Support\Facades\DB::table('tb_members')->where('idx', '=', $member_idx)->where('recommend_idx', '=', \Illuminate\Support\Facades\Auth::id())->count()) > 0;
    }else if($level == 4){
        $query="
        select * from tb_members where idx = (
        select chongpan_idx from Tb_Members where idx = (
        select parent_idx from tb_members where idx = (
        select recommend_idx from tb_members where idx = ?
        )))
        and idx = ?";
        
        $query_chk = DB::select($query,[$member_idx,\Illuminate\Support\Facades\Auth::id()]);
        
        if($query_chk){
            $isAuthorized = true;
        }
        //$isAuthorized = (\Illuminate\Support\Facades\DB::table('tb_members')->where('idx', '=', $member_idx)->where('recommend_idx', '=', \Illuminate\Support\Facades\Auth::id())->count()) > 0;
    }

    return $isAuthorized;
}



function get_client_ip() {
    $ipaddress ='';
    $ipaddressF ='';
    if (getenv('HTTP_CLIENT_IP'))
    $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
    $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
    else
    $ipaddress = 'UNKNOWN.IP';
    
        if($ipaddress !=''){
                $ipArr = explode(",", $ipaddress);
                $ipaddressF =$ipArr[0];
        }
    return $ipaddressF;
}


function getOsInfo()
{
  $userAgent = $_SERVER["HTTP_USER_AGENT"]; 

  if (preg_match('/linux/i', $userAgent)){ 
    $os = 'linux';}
  elseif(preg_match('/macintosh|mac os x/i', $userAgent)){
    $os = 'mac';}
  elseif (preg_match('/windows|win32/i', $userAgent)){
    $os = 'windows';}
  else {
    $os = 'Other';

  }

  return $os;
}

function getBrowserInfo() 
{
$userAgent = $_SERVER["HTTP_USER_AGENT"]; 
if(preg_match('/MSIE/i',$userAgent) && !preg_match('/Opera/i',$u_agent)){
$browser = 'Internet Explorer';
}
else if(preg_match('/Firefox/i',$userAgent)){
$browser = 'Mozilla Firefox';
}
else if (preg_match('/Chrome/i',$userAgent)){
$browser = 'Google Chrome';
}
else if(preg_match('/Safari/i',$userAgent)){
$browser = 'Apple Safari';
}
elseif(preg_match('/Opera/i',$userAgent)){
$browser = 'Opera';
}
elseif(preg_match('/Netscape/i',$userAgent)){
$browser = 'Netscape';
}
else{
$browser = "Other";
}

return $browser;
}


//sms발송 토큰 세션저장하기
/**
 * 관리자아이디 여부
 * @return bool
 */
function smsSendingToken()
{
    $encoding_key = base64_encode('vvdomin78:8b4482c2d334a18be198085da59f482b');

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://sms.gabia.com/oauth/token",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "grant_type=client_credentials",
        CURLOPT_HTTPHEADER => array(
          "Content-Type: application/x-www-form-urlencoded",
          "Authorization: Basic ".$encoding_key
            ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
    $result = json_decode($response,true);
    $aToken = $result['access_token'];
    $expire = $result['is_expires'];

    //엑세토큰 세션설정                
    session(['access_token' => $aToken]);
    $accessToken = session('access_token'); 
    $access_sending_key = base64_encode('vvdomin78:'.$accessToken);
    //발송토큰 세션설정
    session(['sending_token' => $access_sending_key]);  
    }
    //LOG::debug(session('sending_token'));
    return session('sending_token');
}

//sms발송 토큰 세션저장하기
/**
 * 관리자아이디 여부
 * @return bool
 */
function smsSend($postfield,$sendingToken)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://sms.gabia.com/api/send/sms",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $postfield,
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/x-www-form-urlencoded",
      "Authorization: Basic ".$sendingToken
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    //LOG::debug("문자서비스=>: ".$response);
    curl_close($curl);

    if ($err) {
        return "";
    }else{
        return json_decode($response,true);    
    }
    
    
}



//sms발송 토큰 세션저장하기
/**
 * 관리자아이디 여부
 * @return bool
 */
function smsAllSend($phoneArr,$text,$key,$sendingToken)
{
    $postfield = "phone=".$phoneArr."&callback=16612953&message=".$text."&refkey=[[".$key."]]";

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://sms.gabia.com/api/send/sms",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $postfield,
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/x-www-form-urlencoded",
      "Authorization: Basic ".$sendingToken
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    //LOG::debug("문자서비스=>: ".$response);
    curl_close($curl);

    if ($err) {
        return "";
    }else{
        return json_decode($response,true);    
    }
    
    
}

//********************************************************************************************
    //난수문자 생성기
    //********************************************************************************************
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//포인트 변경내역로그 테이블
function changedPointLog($idx,$type,$occur_point,$origin_point,$after_point,$gameIdx = 0,$productIdx = 0) {
    $lastIdx = DB::table('Tb_ChangedPointLog')
    ->insertGetId([
        'member_idx' => $idx,
        'type' => $type,
        'occur_point' => $occur_point,
        'origin_point' => $origin_point,
        'after_point' => $after_point,
        'game_idx' => $gameIdx,
        'product_idx' => $productIdx
    ]);
    return $lastIdx;
}

//액션로그남기기
function insertHistoryLog($actioncode,$action_id,$action_ip) {
    $lastIdx = DB::table('Tb_AdminHistory')
    ->insertGetId([
        'actioncode' => $actioncode,
        'action_id' => $action_id,
        'action_ip' => $action_ip
    ]);
    return $lastIdx;
}