<!DOCTYPE HTML><HTML><HEAD><TITLE>DAN-BALL Game</TITLE><META NAME="robots" CONTENT="noindex"><BASE HREF="/javagame/dust/"><SCRIPT>
function cookie_get(nm){
	var r='';
	if(document.cookie){
		var c=document.cookie.split("; ");
		for(var i=0; i<c.length; i++){
			var k=c[i].split("=");
			if(k[0]==nm && k[1]!=""){
				r=k[1].split("+");
				break;
			}
		}
		for(i=0; i<r.length; i++)
			r[i]=decodeURIComponent(r[i]);
	}
	return(r);
}
</SCRIPT>
<STYLE>
BODY{MARGIN:0;BACKGROUND:rgba(235,197,92,0.25);}
.nrnb{-MS-INTERPOLATION-MODE:nearest-neighbor;IMAGE-RENDERING:-webkit-crisp-edges;IMAGE-RENDERING:-moz-crisp-edges;IMAGE-RENDERING:pixelated;}
</STYLE>
</HEAD><BODY><CANVAS ID="cv" ONMOUSEDOWN="top.gmi.focus();"></CANVAS><SCRIPT SRC="/Games/Powdergame/dust.js"></SCRIPT><SCRIPT>
var src_ck=cookie_get("user");
Init(src_ck[3],0,"");
</SCRIPT>
</BODY>
</HTML>
