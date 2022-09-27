var parts = window.location.search.substr(1).split("&");

var $_GET = {};

for (var i = 0; i < parts.length; i++) {
    var temp = parts[i].split("=");
    $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
}

function loadImages(src) {
  if (document.images) {
    img1 = new Image();
    img1.src = src;
  }
}

function setCookie(cName, cValue, expDays) {
        let date = new Date();
        date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}

function getCookie(cName) {
      const name = cName + "=";
      const cDecoded = decodeURIComponent(document.cookie); //to be careful
      const cArr = cDecoded .split('; ');
      let res;
      cArr.forEach(val => {
          if (val.indexOf(name) === 0) res = val.substring(name.length);
      })
      return res;
}

let _ulaid = $_GET._ulaid;
let _ulsuid = $_GET._ulsuid;
let _ulaidCookie = getCookie('_ulaid');
let _ulsuidCookie = getCookie('_ulsuid');

if (_ulaid) {
  setCookie('_ulaid', _ulaid, 30);
} else {
  if (_ulaidCookie) {
    _ulaid = _ulaidCookie;
  }
}

if (_ulsuid) {
  setCookie('_ulsuid', _ulsuid, 30);
} else {
  if (_ulsuidCookie) {
    _ulsuid = _ulsuidCookie;
  }
}

if (_ulaid) {
  loadImages("<?=$baseURL?>/p/" + _ulaid + "/" + _ulsuid + "/<?=$tracking?>");
}
