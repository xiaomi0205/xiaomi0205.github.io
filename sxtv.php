<?php
$id=isset($_GET['id'])?$_GET['id']:'wlzh';
$n = array(
  //龙江广电
  'cctv1' => 'kWh6n4A,http://vod.center.hljtv.com/lsdream', //CCTV1
  'cctv2' => 'TZ2mq51,http://vod.center.hljtv.com/lsdream', //CCTV2
  'cctv3' => 'YcwfP0V,http://vod.center.hljtv.com/lsdream', //CCTV3
  'cctv13' => 'teQ1fxO,http://vod.center.hljtv.com/lsdream', //CCTV13

  'hljws' => 'De82Rb4,http://vod.center.hljtv.com/lsdream', //黑龙江卫视
  'hljys' => 'h5us6dr,http://vod.center.hljtv.com/lsdream', //黑龙江影视
  'hljds' => 'jqKfhGP,http://vod.center.hljtv.com/lsdream',//黑龙江都市
  'hljds2' => 'sj88csx,http://vod.center.hljtv.com/lsdream', //黑龙江都市2
  'hljxwfz' => '9NNtehl,http://vod.center.hljtv.com/lsdream', //黑龙江法治
  'hljse' => 'JYCBv1X,http://vod.center.hljtv.com/lsdream', //黑龙江少儿

  'fjtv' => 'aBbyTuU,http://vod.center.hljtv.com/lsdream', //富锦电视台(佳木斯)
  'fyzh' => 'e3Y027D,http://vod.center.hljtv.com/lsdream', //抚远电视台(佳木斯)
  'hlzh' => 'g5RE13r,http://vod.center.hljtv.com/lsdream', //海伦综合(绥化)
  'slzh' => 'FtWlsh9,http://vod.center.hljtv.com/lsdream', //绥棱综合(绥化)
  'qazh' => '2BV2akp,http://vod.center.hljtv.com/lsdream', //庆安综合(绥化)
  'lxzh' => 'HjiNct1,http://vod.center.hljtv.com/lsdream', //兰西综合(绥化)
  'bytv' => 'C353yf7,http://vod.center.hljtv.com/lsdream', //巴彦电视台(哈尔滨)
  'dnzh' => '7gf6a72,http://vod.center.hljtv.com/lsdream', //东宁综合(牡丹江)
  'lkzh' => 'WtA8HmB,http://vod.center.hljtv.com/lsdream', //林口综合(牡丹江)
  'sfhzh' => 'gS7S5pS,http://vod.center.hljtv.com/lsdream', //绥芬河综合(牡丹江)
  'tlzh' => 'QgOu88F,http://vod.center.hljtv.com/lsdream', //铁力综合(伊春)
  'kdzh' => 'IXo0qbO,http://vod.center.hljtv.com/lsdream', //克东综合(齐齐哈尔)
  'ljzh' => 'nznfTV8,http://vod.center.hljtv.com/lsdream', //龙江综合(齐齐哈尔)
  'tailzh' => 'on7sNau,http://vod.center.hljtv.com/lsdream', //泰来综合(齐齐哈尔)
  'yazh' => '1szOvMr,http://vod.center.hljtv.com/lsdream', //依安综合(齐齐哈尔)
  'nhzh' => 'Ig4YRW0,http://vod.center.hljtv.com/lsdream', //讷河综合(齐齐哈尔)
  'bqzh' => 'YzE2bEx,http://vod.center.hljtv.com/lsdream', //拜泉综合(齐齐哈尔)
  'blzh' => 'sikQfzJ,http://vod.center.hljtv.com/lsdream', //勃利综合(七台河)

  //山西台
  'sxws' => 'OVfl2Ju,https://livehhhttps.sxrtv.com/lsdream', //山西卫视
  'sxws2' => 'q8RVWgs,https://livehhhttps.sxrtv.com/lsdream', //山西卫视2
  'sxjj' => '4j01KWX,https://livehhhttps.sxrtv.com/lsdream', //山西经济
  'sxys' => 'Md571Kv,https://livehhhttps.sxrtv.com/lsdream', //山西影视
  'sxshfz' => 'p4y5do9,https://livehhhttps.sxrtv.com/lsdream', //山西社会与法治
  'sxgg' => 'Y00Xezi,https://livehhhttps.sxrtv.com/lsdream', //山西公共
  'sxse' => 'eAxHt6q,https://livehhhttps.sxrtv.com/lsdream', //山西少儿
  'sxhh' => 'lce1mC4,https://livehhhttps.sxrtv.com/lsdream', //山西黄河

  //黄山台
  'hsxwzh' => '8E55iTz,http://183.166.129.54:8000', //黄山新闻综合
  'hsggsh' => 'K6loq2m,http://183.166.129.54:8000', //黄山公共生活

  //运城台
  'ycxwzh' => 'ss4Lj11,http://live.0359tv.com', //运城新闻综合
  'ycggpd' => 't667aTY,http://live.0359tv.com', //运城公共
  'yckjjy' => 'p5eq48m,http://live.0359tv.com', //运城科技教育
  'xjtv' => 'dbo4n2O,http://live.0359tv.com', //新绛电视
  'lytv' => 'ul3DNA0,http://live.0359tv.com', //临猗电视

  //大连台
  'dlzh' => 'tcb3IB5,http://live.dltv.cn', //大连新闻综合
  'dlsh' => 'JzcFkF4,http://live.dltv.cn', //大连生活
  'dlgg' => '51V6n6x,http://live.dltv.cn', //大连公共
  'dlwt' => 'hxT7Fc3,http://live.dltv.cn', //大连文体
  'dlzhys' => '8cuL6wa,http://live.dltv.cn', //大连综合影视
  'dlse' => 'q6tZ6Ba,http://live.dltv.cn', //大连少儿
  'dlcj' => 'PN4pom8,http://live.dltv.cn', //大连财经
  'dlgw' => 'N4S4uAj,http://live.dltv.cn', //大连天鹅购物

  //南昌台
  'ncxwzh' => 'jw22cAZ,http://liveplay.nctv.net.cn', //南昌新闻综合
  'ncds' => 'LfqghkO,http://liveplay.nctv.net.cn', //南昌都市
  'nczx' => 'an6J0sz,http://liveplay.nctv.net.cn', //南昌资讯
  'ncgg' => '22zqwYf,http://liveplay.nctv.net.cn', //南昌公共
  'wlzh' => 'Rk1h79G,http://liveplay.nctv.net.cn', //湾里综合

  //太原台(CUTV)
  'tyxwzh' => '49VAfrw,https://tytv-tsl.cutv.com', //太原新闻综合
  'tyjjsh' => 'u8BmT6h,https://tytv-tsl.cutv.com', //太原经济生活
  'tysjfz' => 'phsry3e,https://tytv-tsl.cutv.com', //太原社教法制
  'tyys' => 'J4EX72D,https://tytv-tsl.cutv.com', //太原影视
  'tywt' => 'rk8Z088,https://tytv-tsl.cutv.com', //太原文体
  'tyblg' => 'iancgyD,https://tytv-tsl.cutv.com', //太原佰乐购

  //阳泉台(CUTV)
  'yqzh' => 'TxShwDD,https://yqtv-tsl.cutv.com', //阳泉综合
  'yqkj' => 'oWhK645,https://yqtv-tsl.cutv.com', //阳泉科教

  //汕头台(CUTV)
  'stxwzh' => 'lKGXIQa,https://sttv-tsl.cutv.com', //汕头新闻综合
  'stjjsh' => '7xjJK9d,https://sttv-tsl.cutv.com', //汕头经济生活
  'styswy' => 'G7Kql7a,https://sttv-tsl.cutv.com', //汕头影视文艺

  //台州台(CUTV)
  'tzxwzh' => 'n5YzUtt,https://tztv-tsl.cutv.com', //台州新闻综合
  'tzyswh' => 'Hcj0hKp,https://tztv-tsl.cutv.com', //台州影视文化
  'tzggcf' => '25qamuz,https://tztv-tsl.cutv.com', //台州公共财富

  //珠海台(CUTV)
  'zhxw' => 'zZGtroL,https://zhtv-tsl.cutv.com', //珠海新闻
  'zhsh' => 'HtyU8ou,https://zhtv-tsl.cutv.com', //珠海生活

  //深圳台(CUTV)
  'szws' => 'AxeFRth,http://sztv-live.cutv.com', //深圳卫视
  'szyl' => '1q4iPng,http://sztv-live.cutv.com', //深圳娱乐
  'szse' => '1SIQj6s,http://sztv-live.cutv.com', //深圳少儿
  'szgg' => '2q76Sw2,http://sztv-live.cutv.com', //深圳公共
  'szcjsh' => '3vlcoxP,http://sztv-live.cutv.com', //深圳财经生活
  'szdsj' => '4azbkoY,http://sztv-live.cutv.com', //深圳电视剧
  'szds' => 'ZwxzUXr,http://sztv-live.cutv.com', //深圳都市
  'szgj' => 'sztvgjpd,http://sztv-live.cutv.com', //深圳国际
  'szyd' => 'wDF6KJ3,http://sztv-live.cutv.com', //深圳移动
  'szdvsh' => 'xO1xQFv,http://sztv-live.cutv.com', //深圳DV生活
  'yhgw' => 'BJ5u5k2,http://sztv-live.cutv.com', //宜和购物
  'sztyjk' => 'sztvtyjk,http://sztv-live.cutv.com', //深圳体育健康

  //中山台
  'zszh' => 'qTl38me,http://v.zsbtv.com.cn', //中山综合
  'zsgg' => 'H3QclaV,http://v.zsbtv.com.cn', //中山公共
  'zsjy' => 'O06b0Mw,http://v.zsbtv.com.cn', //中山教育
);
$str = preg_split("/[\s,]/","$n[$id]");
$pname = pathname($str[0]);

$playurl = $str[1]. '/'.$str[0].'/'.$pname.'.m3u8';
header('Location:'.$playurl);
//echo $playurl;

function pathname($e) {
    date_default_timezone_set('Asia/Shanghai');
    $d = -1;
    $l = 0;
    $r = 0;
    for ($a = 0;$a < strlen($e);$a++) {
        $p = ord($e[$a]);
        $r += $p;
        if (-1 != $d) {
            $l += $d - $p;
        }
        $d = $p;
    }
    $o = strtotime(date('Y-m-d')).'000';
    $r = $r+$l;
    $s = get_char($r);
    $c = get_char($o);
    $u = 0;
    for ($a = 0; $a < strlen($c); $a++) {
        $u += ord($c[$a]);
    }
    $c = substr($c,5).substr($c,0, 5);
    $f = abs($u - $r);
    $c = strrev($s).$c;
    $g = substr($c,0, 4);
    $w = substr($c,4);
    $m = [];
    $b = date('$w') % 2;
    //返回星期

    for ($a = 0; $a < strlen($e); $a++) {
        if ($a % 2 == $b) {
            $m[] = $c[$a % strlen($c)];
        } else {
            $h = isset($e[$a - 1]) && ($a >= 1);
            if ($h) {
                $v = strpos($g,$e[$a - 1]);
                if ($v === false) {
                    $m[] = $e[$a - 1];
                } else {
                    $m[] = $w[$v];
                }
            } else {
                $m[] = $g[$a];
            }
        }
    }
    $ret = substr(strrev(get_char($f)).implode('',$m),0,strlen($e));
    return $ret;
}

function get_char($num) {
    $num = floatval($num);
    $charArr = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 
'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    $char = '';
    do {
        $key = fmod($num,36);
        $char = $charArr[$key].$char;
        $num = floatval(($num - $key) / 36);
       }
    while ($num > 0);
    return $char;
}
?>
