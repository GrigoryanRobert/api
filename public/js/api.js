$(function() {

    var token = $('meta[name="csrf-token"]').attr('content');

    var url      = window.location.href;

   if(url == 'http://127.0.0.1:8000/test'){
       var title = $('head > title').text();
       var body = $('body').html();
       $.ajax({
           type: 'post',
           url: 'testapi',
           data: {_token: token,title: title, body:body },
           success: function (data) {
               console.log(data);

           }
       });
   }


});