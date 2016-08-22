<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <title>Magic Trick</title>
</head>
<body>
<div id="welcome">
    <h2>Magic trick</h2>
    <h3>Please! follow the below instruction for accurate answer</h3>
    Are you ready?
    <button id="ready">Yes</button>
</div>
<!-- <div id="instructions" style="display:none"></div> -->
    <div id="instruction1" style="display:none">
    <h2>Instructions</h2>
        1. Choose one number from 2 to 1000 and remember it.
        <button id="done1">Done</button>
    </div>
    <div id="instruction2" style="display:none">
        2. Choose same number for your friend too as his/her contribution and ADD both numbers.
        <button id="done2">Done</button>
    </div>
    <div id="instruction3" style="display:none">
        3. Let  me choose my number too, ah! please add my number <span id="mynumber"></span> as my contribution to your result.
        <button id="done3">Done</button>
    </div>
    <div id="instruction4" style="display:none">
        4. Now divid whole result by 2 and remember result.
        <button id="done4">Done</button>
    </div>
    <div id="instruction5" style="display:none">
        5. Substract your friend contribution from result.
        <button id="done5">Done</button>
    </div>
    <div id="result" style="display:none">
    <h2>Your number is <span id="rnumber"></span></h2>
    <button id="restart">Once More!!! </button>
    </div>

</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
var mynumber = 0;
    $('#ready').click(function(){
        $('#welcome').hide('slow');
        $('#instruction1').show('slow');
    });
    $('#done1').click(function(){
        $('#instruction2').show('slow');
    });
    $('#done2').click(function(){
        $('#instruction3').show('slow');
        var mynumber = Math.floor(Math.random() * 200) + 1
        $('#mynumber').text(mynumber);
        var rnumber = mynumber/2;
        $('#rnumber').text(rnumber);
    });
    $('#done3').click(function(){
        $('#instruction4').show('slow');
    });
    $('#done4').click(function(){
        $('#instruction5').show('slow');
    });
    $('#done5').click(function(){
        $('#result').show('slow');
    });

    $('#restart').click(function(){
        $('#instruction1').hide('slow');
        $('#instruction2').hide('slow');
        $('#instruction3').hide('slow');
        $('#instruction4').hide('slow');
        $('#instruction5').hide('slow');
        $('#result').hide('slow');
        $('#welcome').show('slow');
    });
});

</script>
