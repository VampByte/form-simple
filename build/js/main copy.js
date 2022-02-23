$(window).scroll(function () {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
});

/* const getRemainTime = deadline => {
	let now = new Date(),
		remainTime = (new Date(deadline) - now + 1000) / 1000,
		remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
		remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
		remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
		remainDays = Math.floor(remainTime / (3600 * 24));

	return {
		remainTime,
		remainSeconds,
		remainMinutes,
		remainHours,
		remainDays
	}
};

const countdown = (deadline, elem, finalMessage) => {
	const el = document.getElementById(elem);

	const timerUpdate = setInterval ( () => {
		let t = getRemainTime(deadline);
		el.innerHTML = `${t.remainDays}:${t.remainHours}:${t.remainMinutes}:${t.remainSeconds}`;

		if (t.remainTime <= 1) {
			clearInterval(timerUpdate);
			el.innerHTML = finalMessage;
		}
	}, 1000)
};

countdown('Apr 19 2020 23:00:00 GMT-0500','reloj',''); */

$('.slickZona4U').slick({
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1500,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    /* prevArrow: '<img src="assets/img/flechaIzq.png" class="slide-arrow prev-arrow" alt="Izquierda">',
    nextArrow: '<img src="assets/img/flechaDer.png" class="slide-arrow next-arrow" alt="Derecha">', */
    responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

$(function () {
    var endDate = "February 9, 2021 12:00:00";

    $('.countdown.simple').countdown({
        date: endDate
    });

    $('.countdown.styled').countdown({
        date: endDate,
        render: function (data) {
            /*$(this.el).html("<div>" + this.leadingZeros(data.years, 4) + " <span>años</span></div><div>" + this.leadingZeros(data.days, 3) + " <span>días</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>horas</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>minutos</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>segundos</span></div>");*/

            /* $(this.el).html("<div>" + this.leadingZeros(data.days, 2) + ":<span>días</span></div><div>" + this.leadingZeros(data.hours, 2) + ":<span>horas</span></div><div>" + this.leadingZeros(data.min, 2) + ":<span>minutos</span></div><div>" + this.leadingZeros(data.sec, 2) + "<span>segundos</span></div>"); */

            $(this.el).html("<div class='MontserratExtraBoldItalic timer'>" + this.leadingZeros(data.days, 2) + ":" + this.leadingZeros(data.hours, 2) + ":" + this.leadingZeros(data.min, 2) + ":" + this.leadingZeros(data.sec, 2) + "</div>");
        }
    });

    $('.countdown.callback').countdown({
        date: +(new Date) + 10000,
        render: function (data) {
            $(this.el).text(this.leadingZeros(data.sec, 2) + " sec");
        },
        onEnd: function () {
            $(this.el).addClass('ended');
        }
    }).on("click", function () {
        $(this).removeClass('ended').data('countdown').update(+(new Date) + 10000).start();
    });

    // End time for diff purposes
    var endTimeDiff = new Date().getTime() + 15000;
    // This is server's time
    var timeThere = new Date();
    // This is client's time (delayed)
    var timeHere = new Date(timeThere.getTime() - 5434);
    // Get the difference between client time and server time
    var diff_ms = timeHere.getTime() - timeThere.getTime();
    // Get the rounded difference in seconds
    var diff_s = diff_ms / 1000 | 0;

    var notice = [];
    notice.push('Server time: ' + timeThere.toDateString() + ' ' + timeThere.toTimeString());
    notice.push('Your time: ' + timeHere.toDateString() + ' ' + timeHere.toTimeString());
    notice.push('Time difference: ' + diff_s + ' seconds (' + diff_ms + ' milliseconds to be precise). Your time is a bit behind.');

    $('.offset-notice').html(notice.join('<br />'));

    $('.offset-server .countdown').countdown({
        date: endTimeDiff,
        offset: diff_s * 1000,
        onEnd: function () {
            $(this.el).addClass('ended');
        }
    });

    $('.offset-client .countdown').countdown({
        date: endTimeDiff,
        onEnd: function () {
            $(this.el).addClass('ended');
        }
    });


    // Slick center mode
    $('.centerMode').slick({
        /* centerMode: true,
        centerPadding: '250px',
        slidesToShow: 1,
        focusOnSelect:true,
        autoplay: false,
        infinite: true, */
        arrows: true,
        centerMode: true,
        infinite: true,
        centerPadding: '250px',
        slidesToShow: 1,
        speed: 500,
        dots: false,

        /* variableWidth: true, */
        focusOnSelect: true,
        touchMove: true,

        responsive: [{
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    // equal height
    $('.btns-container').each(function () {
        var highestBox = 0;
        $('.btn-tendencias', this).each(function () {
            if ($(this).height() > highestBox) {
                highestBox = $(this).height();
            }
        });
        $('.btn-tendencias', this).height(highestBox);
    });

    //
    // Cambiar de facultad
	$(document).on("click", ".btn-select-facultad", function () {
		var elem = $(this);
		var slideno = elem.data("slide");

		$('.centerMode').slick('slickGoTo', slideno);

	});

});