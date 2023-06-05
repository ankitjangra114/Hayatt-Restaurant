let counts=setInterval(updated);
let upto=0;
function updated(){
    var count= document.getElementById("percentage1");
    count.innerHTML=(++upto+"%");
    if(upto===166)
    {
      
        clearInterval(counts );
    }
 document.getElementById("percentage1")
}


// let coun=setInterval(update);
// let number=0;
// function update(){
//     var cou= document.getElementById("percentage2");
//     cou.innerHTML=(++number+"%");
//     if(number===190)
//     {
//         clearInterval(coun);
//     }
// }


// // window.onscroll = function() {myFunction()};

// // function myFunction() {
// //   if (document.documentElement.scrollTop > 50) {
// //     document.querySelector(".my-img").ClassList.add("slide-box");
// //   }
// // }
// // $(window).scroll(function(){
// //     if ($(this).scrollTop() > 50) {
// //        $('#dynamic').removeClass('reverse-box');
// //     } else {
// //        $('#dynamic').removeClass('reverse-box');
// //     }
// // });

// // const myInterval = setInterval(scroll, 1000);

// // $(window).scroll(function(){
// //     if ($(this).scrollTop() > 100) {
// //         $('.popup').addClass('slide-box')
// //     } else {
// //        $('.popup').removeClass('slide-box');
// //     //    $('.popdown').addClass('reverse-box');
// //     }


// // });
// !(function (t) {
//     function e(n) {
//       if (i[n]) return i[n].exports;
//       var o = (i[n] = { i: n, l: false, exports: {} });
//       return t[n].call(o.exports, o, o.exports, e), (o.l = true), o.exports;
//     }
//     var i = {};
//     return (
//       (e.m = t),
//       (e.c = i),
//       (e.d = function (t, i, n) {
//         if (!e.o(t, i))
//           Object.defineProperty(t, i, {
//             configurable: false,
//             enumerable: true,
//             get: n,
//           });
//       }),
//       (e.n = function (t) {
//         var i =
//           t && t.__esModule
//             ? function e() {
//                 return t["default"];
//               }
//             : function e() {
//                 return t;
//               };
//         return e.d(i, "a", i), i;
//       }),
//       (e.o = function (t, e) {
//         return Object.prototype.hasOwnProperty.call(t, e);
//       }),
//       (e.p = "/Content/BundledScripts/"),
//       e((e.s = 7984))
//     );
//   })({
// function(t) {
//     var form;
//     t.preventDefault(),
//       t.stopPropagation(),
//       o(this).find(".award-form-send-success").hide(),
//       o(this).find(".award-form-send-error").hide(),
//       o(this).closest("form").find(":submit").click();
//   },
// }),

function submitForm() {
  $('form[name="contact-form"]').submit();
  $('input[type="text"], textarea').val('');
  return false;
};


    // window.addEventListener("load",()=>{
    //     const preloader=document.querySelector("#preloader");
    //     const loader=document.querySelector(".loader-bg");

    //     preloader.classList.add("preloader-hidden");
    //     preloader.addEventListener("transitionend",()=>{
    //         document.body.removeChild(reloader);
    //         document.body.removeChild(loader-bg);

    //     });
    // });
