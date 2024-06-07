function printPage() {
  var username = document.getElementById("item1").innerHTML;
  var nationality = document.getElementById("item2").innerHTML;
  var national_code = document.getElementById("item3").innerHTML;
  var position = document.getElementById("item4").innerHTML;


  // اون باکسی که باید پرینت گرفته شه
  var mycontent = document.getElementById("mybox").innerHTML =
    `
  <div style="display:flex; justify-content:center; align-items:center; flex-direction: column;">
    <div class="show_img">
         <img src="https://pooyaserver.com/wp-content/uploads/2024/06/1.png"  alt="کارت شناسایی" title="کارت شناسایی">
 
         <strong class="item1">
         ${username}
         </strong>
 
         <strong class="item2">
         ${nationality}
         </strong>
 
         <strong class="item3">
         ${national_code}
         </strong>
 
         <strong class="item4">
         ${position}
         </strong>
    </div>

      
    <button onclick="print_pdf()" class="print_info" style="  cursor: pointer;">
    چاپ کارت
    </button>

  </div>
  `

  // فراخوانی هد صفحه فعلی در صفحه پرینت
  var head = document.getElementsByTagName("head")[0].innerHTML;

  // ایجاد یک صفحه / پنجره جدید
  var myWindow = window.open('', '', '');

  // ریختن محتوایی که باید چاپ شه در صفحه چاپ
  myWindow.document.write("<html>   <head>   <p class='mysite'>" + "  ‌  " + "</p>" + head + "  </head>  <body>   <div class='mybox'>" + mycontent + "</div>     </body> </html> ");
  // myWindow.print();

}



function print_pdf() {
  document.querySelector('.print_info').style.display = "none";
  window.print();
}
