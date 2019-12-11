$("#submytus").click(
    function upMystatus(){
       var realtus=$("#realtus").val();
       var upanh=$("#upanh").val();
       var nameimg= upanh.replace(/^.*[\\\/]/, ''); 
       $.ajax({
           url : 'ajaxshow/posttus.php',
           type : 'post',
           data : { method: 'posttus',
           realtus: realtus,
           nameimg: nameimg,
           },
           success : function (result){
               $('#showornot').html(result);
               manche.setAttribute('class', '');
           }
       });
       console.log(nameimg);
       console.log(realtus);
   }
); 


