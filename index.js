

//button text swap
$("#swap").click(function(){
var n1=document.querySelector("#usd");
var n2=document.querySelector("#inr");

if(n1.innerHTML == 'USD')
{
n1.innerHTML = 'INR'
}
else {
n1.innerHTML= 'USD';
}
if(n2.innerHTML == 'INR')
{
n2.innerHTML = 'USD'
}
else{
n2.innerHTML ='INR'
}

})

$("#no").on('input',function(){
var validno =/^([0-9]{1,100})$/;

var toChange =$("#no").val();

if(validno.test(toChange)){

convert();

$("#swap").click(function(){
convert();
})
}

else{
$(".current").text('Number conversion allowed')
}

})




function convert(){
var usd =$("#usd").text();
var inr =$("#inr").text();
var toChange =$("#no").val();
toChange=parseInt(toChange);
var afterChangeD=toChange*76.5;
var afterChangeInr=toChange/76.5;
var c1= $("#usd").html();
if(c1 == 'INR')
{

var a1=$(".current").html( toChange + " "+usd +' =' + afterChangeInr +" "+ inr);
}
else{
var a2=$(".current").html( toChange +" "+usd +' =' + afterChangeD + " "+inr)

}

}



//





//modal toggle

$(".loginc").click(function(event) {
$(".outerParent").slideDown('slow');
$(".outerParent").css({
display: 'block'
});
});
$(".signup").click(function(event){




$(".outer").slideDown('slow');
})
$('.cancel').click(function(event) {
	$('.outer').slideUp('slow')
});

$('.cancel2').click(function(event) {
	$('.outerParent').slideUp('slow')
});


//form login


var password=$("#userpass").val();

var username=$("#username").val();
//var repass =/^[A-Z]{1}([a-zA-Z0-9]+)$/;  

$("#username").keyup(function(){


	var uname=$("#username").val();
	if(uname != '')
	{
	$("#unamealert").css("visibility","hidden");


}
	else{
			$("#unamealert").css("visibility","visible")
	document.querySelector("#register").setAttribute("type", "button");
return false;
	}
})



$("#userpass").on('keyup',function(e){
	var password=$("#userpass").val();

var show=$('.showpassword');
show.css({
visibility:'visible'
})
show.html(password);


var repass =/^([a-zA-Z0-9@$#]){7}([a-zA-Z0-9$%^&*#@]+)$/;  

if(repass.test(password))
{
	$("#upassalert").css("visibility","hidden");

	document.querySelector("#register").setAttribute("type", "submit");

}
else{
$("#upassalert").css("visibility","visible")
	document.querySelector("#register").setAttribute("type", "button");
console.log('pass')
return false;

}




});
