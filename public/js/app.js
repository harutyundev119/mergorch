$(document).ready(function () {
    /* header */
    $('.header .searchInput').fadeOut(0)
    $('.dropdown-toggle').dropdown();
    $('.search-box i').click(() => {
        $('.header .searchInput').fadeToggle(300)
    })

    /* filter  */
    $('.brand label').click(function () {
        $('.brand label').removeClass('act');
        $(this).addClass(('act'))
    })
})
$("#slider-range").length && $(function () {
    $("#slider-range") && $("#slider-range").slider({
        range: true,
        min: 0,
        max: 5000,
        values: [1600, 3400],
        slide: function (event, ui) {
            $("#amount").html(`<span>${ui.values[0]} դր․</span><span>${ui.values[1]}դր․</span>`);
            $('#minPrice').val(ui.values[0]);
            $('#maxPrice').val(ui.values[1]);
        }
    });
    $("#amount").html(`<span>${$("#slider-range").slider("values", 0)} դր․</span>
     <span>${$("#slider-range").slider("values", 1)} դր․</span>`);
    $('#minPrice').val($("#slider-range").slider("values", 0));
    $('#maxPrice').val($("#slider-range").slider("values", 1));
});

/* cart counter */
$('._count_').click(function () {
    let count = +$(this).parent().prev().find('input').val();
    let symbol = $(this).attr('id');

    switch (symbol) {
        case 'plus': count++;
            break;
        case 'minus': count--;
            break;
    }
    count > 0 ? $(this).parent().prev().find('input').val(count) : ''

})
$(document).ready(function () {
    var prodCount = $('.prod_height');
    var countP = prodCount.length;

    for (i = 0; i < countP; i++) {
        var a = $(prodCount[i]).find('.pricebag').text();
        var b = $(prodCount[i]).find('.countprodbag').text();
        // ardyunq = a*b;
        var ardyunq = parseInt(a) * parseInt(b);
        $('.full_price_bag' + i).text(" Ընդանուր գումար։ " + ardyunq + " Դր.");
    }
})

/*add to cart (local storage) */
localStorage.setItem('cart', '')
$('.add_bag ').click(function () {

    $(this).after( "<span>+1</span>" )
    $(this).next( "span" ).animate({fontSize:'15px', opacity:0,top:0,right:0},500);
    let cart = localStorage.getItem('cart');
    let id = $(this).attr('data-code');
    cart = cart + ' ' + id;
    localStorage.setItem('cart', cart);
    let cart_len = localStorage.getItem('cart').split(' ').length;
    $('.shopp-cart').text(cart_len - 1);

  setTimeout(()=>{$('.productBtnGroup span').remove()},500)
})

/*personal acound */
$('.personal li').click(function () {
    let id = $(this).attr('data');
    $('.personal li').removeClass('act');
    $(this).addClass('act');
    $('.edit-box').css('display', 'none');
    $(`.edit-box#${id}`).fadeIn(500)
})
/*menu */
$('.menuBtn').click(function (e) {
    $('.subNavbar').animate({ left: 0 });
    e.stopPropagation()
})
$('body').click(function () {
    $('.subNavbar').animate({ left: '-105%' })

})

$('.sign-comp label').click(function () {

    let isCompany = $(this).find('input').val()
    if(isCompany === 'company'){
         $('.company').slideDown(300)
        $('#passport').html('ՀՎՀՀ')
    }else{
        $('.company').slideUp(300)
        $('#passport').html('Անձնագրի սերիա')
    }



});

$(window).scroll(function () {
    let win_top = $(this).scrollTop()
    let top1 = $('.category').length && $(' .category').offset().top;
    let top2 = $('#dauly-sug').length && $('#dauly-sug').offset().top;
    let top3 = $('#spec-sug').length && $(' #spec-sug').offset().top;
    let top4 = $('#updates').length && $('  #updates').offset().top;

    if (win_top > top1 - 320) {
        $('.category  h2').addClass('anim');
    }
    if (win_top > top2 - 190) {
        $('#dauly-sug  h2').addClass('anim');
    }
    if (win_top > top3 - 190) {
        $('#spec-sug  h2').addClass('anim');
    }
    if (win_top > top4 - 190) {
        $('#updates  h2').addClass('anim');
    }
    if (win_top > 250) {
        $('.fixed-bar').css({ right: 0 });
    }
    if (win_top < 250) {
        $('.fixed-bar').css({ right: '-50px' });
    }
});
setTimeout(() => {
    $('.modal.fade').css('display', 'block')
}, 0)

$('.btn-call').click(function (e) {
    $('.call-modal.fade').addClass('show');
    e.stopPropagation();

})

$('button.close').click(function () {
    $('.fade').removeClass('show');
})

$('body').click(() => {
    $('.fade').removeClass('show');

})

$('.modal-content').click((e) => {
    e.stopPropagation();
})


if (!name) {
    $('.name').next('small').css('display', 'block');
    $('.name').addClass('.error');
} else {
    $('.name').next('small').css('display', 'none')
    $('.name').removeClass('.error');
}

let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
/* contact validation */
$('#contact-form button').click(() => {
    let name = $('#name').val();
    let email = $('#email').val();
    let comment = $('#comment').val();
    let nameValid, emailValid, commentValid;
    if (!name) {
        $('#name').next('small').html('Խնդրում ենք  լրացնել անվան դաշտը');
        $('#name').css('border-color', '#dd1919');
    } else {
        $('#name').next('small').html('');
        $('#name').css('border-color', '#757575');
        nameValid = true
    }

    if (!email) {
        $('#email').next('small').html('Խնդրում ենք  լրացնել էլ․հասցե  դաշտը');
        $('#email').css('border-color', '#dd1919');
    } else if (!email.match(mailformat)) {
        $('#email').next('small').html('Խնդրում ենք  ճիշտ լրացնել էլ․հասցե դաշտը');
        $('#email').css('border-color', '#dd1919');
    } else {
        $('#email').next('small').html('');
        $('#email').css('border-color', '#757575');
        emailValid = true
    }
    if (!comment) {
        $('#comment').css('border-color', '#dd1919');
    } else {
        $('#comment').css('border-color', '#757575');
        commentValid = true
    }

   if(nameValid && emailValid && commentValid)  {
       $('.contact .alert').css('transform','scale(1)');
    //  $('#contact-form').submit()
   }
   setTimeout(()=>{  $('.contact .alert').css('transform','scale(0)');},4000)
})

/* signin validation */

$('#signin-form button').click(() => {
    let name = $('#name').val();
    let lastname = $('#lastname').val();
    let email = $('#email').val();
    let phone = $('#phone').val();
    let pass = $('#password').val();
    let confirmPassword = $('#confirmPassword').val();
    let city = $('#city').val();
    let address = $('#address').val();
    let confirm = $('#confirm').prop('checked');
    let nameValid, lastnameValid,emailValid,phoneValid,passValid,conf_pass_valid,city_valid,addressValid ;
    if (!name) {
        $('#name').css('border-color', '#dd1919');
    } else {
        $('#name').css('border-color', '#757575');
        nameValid = true
    }
    if (!lastname) {
        $('#lastname').css('border-color', '#dd1919');
    } else {
        $('#lastname').css('border-color', '#757575');
        lastnameValid = true
    }
    if (!email.match(mailformat)) {
        $('#email').css('border-color', '#dd1919');
    } else {
        $('#email').css('border-color', '#757575');
        emailValid = true
    }
    if (!phone) {
        $('#phone').css('border-color', '#dd1919');
    } else {
        $('#phone').css('border-color', '#757575');
        phoneValid = true
    }
    if (!pass || (pass.lenght < 6 && pass.lenght > 13) ){
        $('#password').css('border-color', '#dd1919');
    } else {
        $('#password').css('border-color', '#757575');
        passValid = true
    }
    if (pass !== confirmPassword) {
        $('#confirmPassword').css('border-color', '#dd1919');
    } else {
        $('#confirmPassword').css('border-color', '#757575');
        conf_pass_valid = true
    }
    if (!city) {
        $('#city').css('border-color', '#dd1919');
    } else {
        $('#city').css('border-color', '#757575');
        cityValid = true
    }
    if (!address) {
        $('#address').css('border-color', '#dd1919');
    } else {
        $('#address').css('border-color', '#757575');
        addressValid = true
    }
    if(!confirm){
        $('#confirm').prev('label').css('color', '#dd1919');
    }else{
        $('#confirm').prev('label').css('color', '#444');
    }
   if(nameValid && lastnameValid && emailValid &&
        phoneValid && passValid && conf_pass_valid &&
        city_valid && addressValid && confirm)  {
      $('#signin-form').submit()
   }
})

// ===================================


// $('.del_formcart').click(function () {
//     var thisProPrice = $(this).parent().prev('td').find('._resultPrice_').text();
//     var price = $('._oldPrice_').text();
//     var d = parseInt(price) - parseInt(thisProPrice);
//     var f = d;
//     var price = $('._oldPrice_').text(f);
//     var ok = $('#ok').val(f);


// });
// $(".data_count").attr('disabled', 'disabled');



// var order_i = "1585832586533739418";
// $('.order_idd').val(order_i);


/*=====================================*/

