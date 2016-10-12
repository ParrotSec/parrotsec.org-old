<?php
$mirror=end(explode("/", htmlentities($_GET["mirror"])));
$file=htmlentities($_GET["file"]);
if(in_array("download",$_GET))
{
	$download=htmlentities($_GET["download"]);
}

if($_GET["mirror"]=="auto")
{
	require "georedirect.php";
}

$files["sourceforge"][0]="https://sourceforge.net/projects/parrotsecurity/files";
$files["sourceforge"][1]="sf";

$files["cloudflare"][0]="http://cloudflare.archive.parrotsec.org/parrot/iso";
$files["cloudflare"][1]="cloudflare";

$files["garr"][0]="http://garr-euro.archive.parrotsec.org/mirrors/parrot/iso";
$files["garr"][1]="garr";
$files["euro"][0]="http://garr-euro.archive.parrotsec.org/mirrors/parrot/iso";
$files["euro"][1]="garr";

$files["archive"][0]="http://archive.parrotsec.org/parrot/iso";
$files["archive"][1]="frozenbox";
$files["frozenbox"][0]="http://archive.parrotsec.org/parrot/iso";
$files["frozenbox"][1]="frozenbox";
$files["euro2"][0]="http://archive.parrotsec.org/parrot/iso";
$files["euro2"][1]="frozenbox";

$files["rwth-aachen"][0]="http://rwth-aachen-euro.archive.parrotsec.org/parrotsec/iso";
$files["rwth-aachen"][1]="rwth-aachen";
$files["euro3"][0]="http://rwth-aachen-euro.archive.parrotsec.org/parrotsec/iso";
$files["euro3"][1]="rwth-aachen";

$files["warwick"][0]="http://anorien.csc.warwick.ac.uk/mirrors/parrot/iso";
$files["warwick"][1]="warwick";
$files["euro4"][0]="http://anorien.csc.warwick.ac.uk/mirrors/parrot/iso";
$files["euro4"][1]="warwick";

$files["nluug"][0]="http://nluug-euro.archive.parrotsec.org/os/Linux/distr/parrot/iso";
$files["nluug"][1]="nluug";
$files["euro5"][0]="http://nluug-euro.archive.parrotsec.org/os/Linux/distr/parrot/iso";
$files["euro5"][1]="nluug";

$files["onet"][0]="http://onet-euro.archive.parrotsec.org/pub/mirrors/parrot/iso";
$files["onet"][1]="onet";
$files["euro6"][0]="http://onet-euro.archive.parrotsec.org/pub/mirrors/parrot/iso";
$files["euro6"][1]="onet";

$files["umu"][0]="http://umu-euro.archive.parrotsec.org/mirror/parrotsec.org/parrot/iso";
$files["umu"][1]="umu";
$files["euro7"][0]="http://umu-euro.archive.parrotsec.org/mirror/parrotsec.org/parrot/iso";
$files["euro7"][1]="umu";

$files["heanet"][0]="http://ftp.heanet.ie/pub/parrotsec/iso";
$files["heanet"][1]="heanet";
$files["euro8"][0]="http://ftp.heanet.ie/pub/parrotsec/iso";
$files["euro8"][1]="heanet";

$files["esslingen"][0]="https://esslingen-euro.archive.parrotsec.org/pub/Mirrors/archive.parrotsec.org/iso";
$files["esslingen"][1]="esslingen";
$files["euro9"][0]="https://esslingen-euro.archive.parrotsec.org/pub/Mirrors/archive.parrotsec.org/iso";
$files["euro9"][1]="esslingen";


$files["dasa1-euro"][0]="http://dasa1-euro.archive.parrotsec.org/parrot/iso";
$files["dasa1-euro"][1]="dasa";
$files["euro10"][0]="http://dasa1-euro.archive.parrotsec.org/parrot/iso";
$files["euro10"][1]="dasa";

$files["dasa2-euro"][0]="http://dasa2-euro.archive.parrotsec.org/parrot/iso";
$files["dasa2-euro"][1]="dasa";
$files["euro11"][0]="http://dasa2-euro.archive.parrotsec.org/parrot/iso";
$files["euro11"][1]="dasa";


$files["uoc"][0]="http://ftp.cc.uoc.gr/mirrors/linux/parrot/iso";
$files["uoc"][1]="uoc";
$files["euro12"][0]="http://ftp.cc.uoc.gr/mirrors/linux/parrot/iso";
$files["euro12"][1]="uoc";



$files["mit"][0]="http://mit-usa.archive.parrotsec.org/parrot/iso";
$files["mit"][1]="mit";
$files["usa"][0]="http://mit-usa.archive.parrotsec.org/parrot/iso";
$files["usa"][1]="mit";

$files["mtu"][0]="http://lug.mtu.edu/parrot/iso";
$files["mtu"][1]="mtu";
$files["usa2"][0]="http://lug.mtu.edu/parrot/iso";
$files["usa2"][1]="mtu";

$files["jmu"][0]="http://mirror.jmu.edu/pub/parrot/iso";
$files["jmu"][1]="jmu";
$files["usa3"][0]="http://mirror.jmu.edu/pub/parrot/iso";
$files["usa3"][1]="jmu";

$files["clarkson"][0]="http://mirror.clarkson.edu/parrot/iso";
$files["clarkson"][1]="clarkson";
$files["usa4"][0]="http://mirror.clarkson.edu/parrot/iso";
$files["usa4"][1]="clarkson";

$files["berkeley"][0]="http://mirrors.ocf.berkeley.edu/parrot/iso";
$files["berkeley"][1]="berkeley";
$files["usa5"][0]="http://mirrors.ocf.berkeley.edu/parrot/iso";
$files["usa5"][1]="berkeley";

$files["cedia"][0]="http://cedia.archive.parrotsec.org/parrot/iso";
$files["cedia"][1]="cedia";
$files["sam"][0]="http://cedia.archive.parrotsec.org/parrot/iso";
$files["sam"][1]="cedia";

$files["uta"][0]="http://uta.archive.parrotsec.org/parrot/iso";
$files["uta"][1]="uta";
$files["sam2"][0]="http://uta.archive.parrotsec.org/parrot/iso";
$files["sam2"][1]="uta";

$files["ueb"][0]="http://ueb-sam.archive.parrotsec.org/parrot/iso";
$files["ueb"][1]="ueb";
$files["sam3"][0]="http://ueb-sam.archive.parrotsec.org/parrot/iso";
$files["sam3"][1]="ueb";

$files["yandex"][0]="http://yandex-asia.archive.parrotsec.org/mirrors/parrot/iso";
$files["yandex"][1]="yandex";
$files["asia"][0]="http://yandex-asia.archive.parrotsec.org/mirrors/parrot/iso";
$files["asia"][1]="yandex";

$files["amberit"][0]="http://amberit-asia.archive.parrotsec.org/parrotsec/iso";
$files["amberit"][1]="amberit";
$files["asia2"][0]="http://amberit-asia.archive.parrotsec.org/parrotsec/iso";
$files["asia2"][1]="amberit";

$files["nchc"][0]="http://free.nchc.org.tw/parrot/iso";
$files["nchc"][1]="nchc";
$files["asia3"][0]="http://free.nchc.org.tw/parrot/iso";
$files["asia3"][1]="nchc";

$files["ustc"][0]="http://mirrors.ustc.edu.cn/parrot/iso";
$files["ustc"][1]="yfgao";
$files["asia5"][0]="http://mirrors.ustc.edu.cn/parrot/iso";
$files["asia5"][1]="yfgao";

$files["tuna"][0]="https://mirrors.tuna.tsinghua.edu.cn/parrot/iso";
$files["tuna"][1]="tuna";
$files["asia6"][0]="https://mirrors.tuna.tsinghua.edu.cn/parrot/iso";
$files["asia6"][1]="tuna";

$files["asis"][0]="http://parrot.asis.io/parrot-iso";
$files["asis"][1]="asis";
$files["meast"][0]="http://parrot.asis.io/parrot-iso";
$files["meast"][1]="asis";

$files["lagoon"][0]="http://lagoon-ocean.archive.parrotsec.org/pub/parrot/iso";
$files["lagoon"][1]="lagoon";
$files["ocean"][0]="http://lagoon-ocean.archive.parrotsec.org/pub/parrot/iso";
$files["ocean"][1]="lagoon";

$files["aptus"][0]="http://mirror.aptus.co.tz/pub/parrot/iso";
$files["aptus"][1]="aptus";
$files["africa"][0]="http://mirror.aptus.co.tz/pub/parrot/iso";
$files["africa"][1]="aptus";




//-------------------------------------------------
//-------------------------------------------------
//------                                     ------
//------          sourceforge stuff          ------
//------                                     ------
//-------------------------------------------------
//-------------------------------------------------


$rname = "citylan";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "colocrossing";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "dfn";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "freefr";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "ignum";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "internode";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "jaist";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "kaz";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "kent";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "liquidtelecom";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "nbtelecom";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "netassist";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "netcologne";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "netix";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "pilotfiber";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "superb-dca2";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "superb-dca3";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "superb-sea2";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "tenet";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "ufpr";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";

$rname = "vorboss";
$files[$rname][0]="http://".$rname.".dl.sourceforge.net/project/parrotsecurity/";
$files[$rname][1]="sf";





//if request is valid
if($files["$mirror"][0] != "" && $file != "")
{
//if request comes from download page (to avoid torrent requests to be counted)
//	if($download != "")
//	{
		$db = new SQLite3("/www/parrotsec.org/get/db/db.sqlite");
		$db->query("UPDATE stats SET count=count+1 WHERE mirror='total';");
		$db->query("UPDATE stats SET count=count+1 WHERE mirror='".$files[$mirror][1]."';");
		$db->close();
//	}

	header("Location: ".$files["$mirror"][0]."/".$file, true, 307);
	die();
}


?>

