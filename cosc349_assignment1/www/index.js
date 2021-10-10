/**
 * Created by yzou on 28/08/20.
 */
/*jslint browser */

var Cookie = (function () {

    var pub = {};

    pub.set = function (name, value, hour) {

        //console.log(new Date().getSeconds()) ;


        var date, expires;
        if (hour) {
            date = new Date();

            date.setHours(date.getHours() + hour);
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }

        // console.log(name);
        //console.log(encodeURIComponent(name));

        // var encodename= encodeURIComponent(name);

        document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";

    };

    pub.get = function (name) {
        var nameEq, cookies, cookie, i;
        nameEq = encodeURIComponent(name) + "=";
        cookies = document.cookie.split(";");
        for (i = 0; i < cookies.length; i += 1) {
            cookie = cookies[i].trim();
            if (cookie.indexOf(nameEq) === 0) {
                return decodeURIComponent(cookie.substring(nameEq.length, cookie.length));
            }
        }
        return null;
    };


    pub.showALL = function () {
        var cookies, cookie, i, nameEq;

        var result = "empty";
        cookies = document.cookie.split(";");

        for (i = 0; i < cookies.length; i += 1) {
            cookie = cookies[i].trim();

            result += "\n" + cookie.substring(cookie.name, decodeURIComponent(cookie.length));

        }
        return result;

    }

    pub.clear = function (name) {
        pub.set(name, "", -1);
    };
    return pub;
}());


function display_c() {
    var refresh = 1000; // Refresh rate in milli seconds
    mytime = setTimeout('display_ct()', refresh)
}

function display_ct() {
    var x = new Date()
    document.getElementById('timeNow').innerHTML = new Date();
    display_c();
}

function login() {
    console.log("logged in")
    Cookie.set('status', 'true');
    Cookie.set('user', 'loggedIn');
    return false;
}
function logput() {

    Cookie.clear();
}

function setup() {
    display_c();
    var test = {};
    test.user = "testuser";

    console.log(Cookie.get("user"));

    Cookie.set("test", "tes tes test", 1000);

}

var control = (function () {
    "use strict";

    var pub = {};

    function check() {

        var display =  document.getElementById("user_name");

        console.log(document.getElementById("user_name"));

        // document.getElementById("username").innerHTML = "test";

        if (Cookie.get("status") === "true") {
            console.log("logged in");
            var name = Cookie.get("user");
            display.innerText = name;
        } else {
            console.log("not loged in");
            display.innerText = "not log in yet";
        }

    }

    function submitcheck() {
        alert("checking");
        if (Cookie.get("status") === "true") {
           if(Cookie.get("data")==="0"){
               alert("must select a time zone");
               return false;
           }
            return true;


        } else {
            alert("must log in first");
            return false;
        }

    }
    pub.submitcheking= function(){
        //alert("checking");
        if (Cookie.get("status") === "true") {
            if(Cookie.get("data")==="0"){
                alert("must select a time zone");

            }else{
                window.location="submit.php";
            }



        } else {
            alert("must log in first");

        }
    }

    pub.setup = function () {
        display_c();
        var test = {};
        test.user = "testuser";


        console.log(test);
        Cookie.set("test", "tes tes test", 1000);

        // var form = document.getElementById("submit_user");
        //
        // form.onsubmit = submitcheck();

       check();

    }



    pub.login = function () {
        var name = document.getElementById("input_name").value;
        console.log("logged in")
        console.log(name);
        Cookie.set('status', 'true', 1000);
        Cookie.set('user', name, 1000);

        return false;
    }
    pub.logout = function () {
        console.log("log out")
        Cookie.clear('user');
        Cookie.set('status', 'false');
    }

    return pub;
}());


if (window.addEventListener) {
 window.addEventListener("load", control.setup);
 } else if (window.attachEvent) {
 window.attachEvent("onload", control.setup);
 } else {
 alert("Could not attach ’MovieCategories.setup’ to the ’window.onload’ event");
 }



