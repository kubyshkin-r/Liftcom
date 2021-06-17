    function fun1() {
    var chbox;
    chbox=document.getElementById('checkbox');
        if (chbox.checked) {
            document.getElementById("oneid").className = "navigation-check";
            document.getElementById("control-scroll").className = "control-scroll-check";
        }
        else {
            document.getElementById("oneid").className = "navigation";
            document.getElementById("control-scroll").className = "control-scroll";
        }
    }
