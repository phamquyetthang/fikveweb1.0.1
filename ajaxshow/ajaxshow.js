var loadtus={}

loadtus.loadTus_soon =function(){
    $.ajax({
        url: 'ajaxshow/showstatus1.php',
        type: 'post',
        data: { method: 'fetch'},
        success: function(data){
            $('#tab1').html(data);
        }
    });
    console.log("load tus 1");
}
loadtus.loadTus_trend =function(){
    $.ajax({
        url: 'ajaxshow/showstatus3.php',
        type: 'post',
        data: { method: 'fetch'},
        success: function(data){
            $('#tab3').html(data);
        }
    });
    console.log("load tus 3");
}
loadtus.loadrankboy =function(){
    $.ajax({
        url: 'ajaxshow/loadrankboy.php',
        type: 'post',
        data: { method: 'fetch'},
        success: function(data){
            $('#tabrankboy').html(data);
        }
    });
    console.log("load rank");
}
loadtus.loadrankgirl =function(){
    $.ajax({
        url: 'ajaxshow/loadrankgirl.php',
        type: 'post',
        data: { method: 'fetch'},
        success: function(data){
            $('#tabrankgirl').html(data);
        }
    });
    console.log("load rank girl");
}
loadtus.loadranklgbt =function(){
    $.ajax({
        url: 'ajaxshow/loadranklgbt.php',
        type: 'post',
        data: { method: 'fetch'},
        success: function(data){
            $('#tabranklgbt').html(data);
        }
    });
    console.log("load rank girl");
}
loadtus.loadmytus =function(){
    $.ajax({
        url: 'ajaxshow/loadmytus.php',
        type: 'post',
        data: { method: 'fetch'},
        success: function(data){
            $('#showmytus').html(data);
        }
    });
    console.log("load my tus");
}
loadtus.interval = setInterval(loadtus.loadTus_soon, 1000);
loadtus.loadTus_soon();

loadtus.interval = setInterval(loadtus.loadTus_trend, 1000);
loadtus.loadTus_trend();

loadtus.interval = setInterval(loadtus.loadrankboy, 1000);
loadtus.loadrankboy();
loadtus.interval = setInterval(loadtus.loadrankgirl, 1000);
loadtus.loadrankgirl();


loadtus.interval = setInterval(loadtus.loadranklgbt, 1000);
loadtus.loadranklgbt();


loadtus.interval = setInterval(loadtus.loadmytus, 1000);
loadtus.loadmytus();