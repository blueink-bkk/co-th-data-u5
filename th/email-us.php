<!DOCTYPE html>
<html lang="en">
   <head>
      <title> Blue Ink Co.Ltd bangkok </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

	  <?php include('head.php'); ?>

   </head>
   <body>

	  <?php include('header.php'); ?>

      <div class="container-fluid top-space">
         <div class="container">
            <div class="row reverse-mob">
               <div class="col-lg-12 col-md-12 order-des pb-3">
                  <div>
                     <h1 class="pb-2"> ติดต่อเรา </h1>
                     <div class=" mb-3">
                        <p>ลูกค้าที่มีค่า,<br>
                           การเพิ่มอีเมลขยะทำให้เราต้องใช้มาตรการป้องกันเพื่อให้เราสามารถให้เวลาตอบสั้นที่สุดและบริการที่ดีที่สุด
                        </p>

                        <p> <b> กรุณาส่งอีเมลคำถามของคุณและเราจะตอบกลับภายใน 24 ชั่วโมง</b> </p>

                        <p id="mail-success" class="form-msg no-display">
                            ส่งอีเมลเรียบร้อยแล้ว ขอขอบคุณ
                        </p>
                        <p id="mail-error" class="form-msg no-display">
                            เกิดความผิดพลาดในการอีเมลล์
                        </p>

                        <form id="forward-message"
                         method="post"
                         enctype="multipart/form-data"
                         class="email-form"
                         action="/api/email-forward"
                         >


                                 <div class="row">
                                    <div class="col-md-6">
                                       <input type="text" id="uname" class="form-control"  name="uname" placeholder="ชื่อของคุณ"><label id="dis"></label>
                                    </div>
                                    <div class="col-md-6">
                                       <input type="text" id="email" class="form-control" name="email" name="" placeholder="อีเมลล์ของคุณ"><label id="dis1"></label>
                                    </div>
                                    <div class="col-md-12">
                                       <input type="text" id="phone" class="form-control" name="phone" placeholder="เบอร์โทรศัพท์"><label id="dis2"></label>
                                    </div>
                                    <div class="col-md-12">
                                       <input type="text" id="subject" class="form-control" name="subject" placeholder="หัวข้อข้อความ"><label id="dis3"></label>
                                    </div>
                                    <div class="col-md-12">
                                      <textarea rows="5" id="message" class="form-control" name="message" placeholder="ข้อความของคุณ: (สูงสุด 4000 ตัวอักษร)" ></textarea><label id="dis4"></label>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="g-recaptcha" id="captcha" data-sitekey="6LeleLoUAAAAAHD7JJqJ7UWgFo-lDvOz4J0YQ5Vn"></div> <label id="dis5"></label>
                                    </div>
                                    <div class="col-md-12">
                                       <input type="submit" name="submit" id="submit" class="form-control" value="เสนอ">
                                    </div>
                                 </div>

                           </form>

                     </div>
                  </div>


               </div>
            </div>
         </div>
      </div>

	  <?php include('footer.php'); ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script type="text/javascript">
function ValidateEmail(email) {
      var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
      return expr.test(email);
}
function ValidateUsername(uname){
 var expr=/^[a-zA-Z0-9_]{3,15}$/;
 return expr.test(uname);
}
function ValidateMobile(phone){
 var expr=/^[0-9 -.\s?]{10,19}$/;
 return expr.test(phone);
}
</script>


<script type="text/javascript">
function validate_Email() {
  var username=$('#uname').val();
  var email=$('#email').val();
  var mobile=$('#phone').val();
  var subject=$('#subject').val();
  var message=$('#message').val();


    //User name validate...
    if(username==""){
     $('#dis').fadeIn().html('<span id="error">ชื่อไม่สามารถปล่อยให้ว่างได้ </span>');
     return false;
   } /*else if(!ValidateUsername(username)){
     $('#dis').fadeIn().html('<span id="error">กรุณาตรวจสอบและใส่อีกครั้ง</span>');
     return false;
   }*/
    else{
     $('#dis').fadeOut();
    }




  //E-mail validate..
    if(email==""){
     $('#dis1').fadeIn().html('<span id="error">อีเมลล์ไม่สามารถปล่อยว่างได้ </span>');
     return false;
    }else if (!ValidateEmail(email)) {
             //alert("Invalid email address.");
       $('#dis1').fadeIn().html('<span id="error">กรุณาตรวจสอบและใส่อีกครั้ง</span>');
     return false;
    }else{
     $('#dis1').fadeOut();
    }


    /*
    //Mobile validate
  if(mobile==""){
   $('#dis2').fadeIn().html('<span id="error">เบอร์โทรศัพท์ไม่สามารถปล่อยให้ว่างได้ </span>');
   return false;
  }else if(!ValidateMobile(mobile)){
   $('#dis2').fadeIn().html('<span id="error">กรุณาใส่อีกครั้ง</span>');
   return false;
  }else{
   $('#dis2').fadeOut();
  }
    */


    //Subject validate
      if(subject==""){
       $('#dis3').fadeIn().html('<span id="error">หัวข้อไม่สามารถปล่อยว่างได้ กรุณาตรวจสอบและใส่อีกครั้ง </span>');
       return false;
      }else{
       $('#dis3').fadeOut();
      }

      //Message validate
      if(message==""){
       $('#dis4').fadeIn().html('<span id="error">ข้อความไม่สามารถปล่อยให้ว่างได้กรุณาใส่อีกครั้ง </span>');
       return false;
      }else{
       $('#dis4').fadeOut();
      }

      //Captcha validate
      if(grecaptcha.getResponse() == "") {
        e.preventDefault();
        $('#dis5').fadeIn().html('<span id="error">ต้องการแคปต์ชา</span>');
    	return false;
      } else {
        $('#dis5').fadeOut();
      }

  return true;
}; // validate_Email


document.addEventListener("DOMContentLoaded", function(event) {
  console.log('DOMContentLoaded.')
  document.forms['forward-message'].addEventListener('submit', (event) => {
    event.preventDefault();
    console.log('Entering submit function.')
    // TODO do something here to show user that form is being submitted
//      const action = event.target.action;
//      const action = 'http://localhost:3000/'

    $('p#mail-error').addClass('no-display')

    if (!validate_Email()) {
      return;
    }

//      const action = '/email-forward' ; //event.target.action;
    const fdata = new FormData(event.target);
    for(var pair of fdata.entries()) {
      console.log(pair[0]+ ', '+ pair[1]);
    }

    const _uname = fdata.get('uname')
    const _email = fdata.get('email')
    const _phone = fdata.get('phone')
    const _subject = fdata.get('subject')
    const _msg1 = fdata.get('message')

    const msg2 = `
    <br>
    <div>
    <b>From :</b> ${_uname}
    </div>

    <br>
    <div>
    <b>email address :</b>
    <a href="mailto:${_email}?subject=RE: ${_subject}">
    ${_email}
    </a>
    </div>

    <br>
    <div>
    <b>phone :</b> ${_phone}
    </div>

    <br>
    <div>
    <b>subject :</b> ${_subject}
    </div>

    <br>
    <div>
    <p style="margin:20px; background-color:rgb(230,250,230); max-width:600px; padding:10px; min-height:100px;">
    ${_msg1.replace(/\n/g,'<br>\n')}
    </p>
    </div>
    `;


    fdata.set('message', msg2)

    fetch(event.target.action, {
      method: 'POST',
      body: new URLSearchParams(fdata) // event.target is the form
    }).then((resp) => {
      console.log({resp})
      return resp.json(); // or resp.text() or whatever the server sends
    }).then((retv) => {
      console.log({retv})
      if (retv.error) {
        $('p#mail-error').removeClass('no-display')
      } else {
        $('p#mail-success').removeClass('no-display')
        $('input#submit').addClass('no-display')
      }
    // TODO handle body
    }).catch((error) => {
      console.log({error})
      //error(error)
    // TODO handle error
    });
    return false;
  });

});


</script>



    </body>
</html>
