function toggleReadMore() {
    var e = document.getElementById("dots"),
        t = document.getElementById("moreText"),
        o = document.getElementById("readMoreBtn");
    (t.classList.toggle("show"),
        t.classList.contains("show")
            ? ((e.style.display = "none"), (o.innerHTML = "Read Less"))
            : ((e.style.display = "inline"), (o.innerHTML = "Read More")));
}
(!(function (e) {
    "use strict";
    let t = window.innerWidth;
    (e(document).ready(function () {}),
        e("[data-background").each(function () {
            e(this).css(
                "background-image",
                "url( " + e(this).attr("data-background") + "  )",
            );
        }),
        new Swiper(".hero-9", {
            pagination: { el: ".swiper-pagination", type: "fraction" },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            direction: "horizontal",
            loop: !0,
            slidesPerView: 1,
            spaceBetween: 30,
            mousewheel: !1,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
                clickable: !0,
                renderFraction: function (e, t) {
                    return (
                        '<span class="' +
                        e +
                        '"></span> <span><i class="fa-solid fa-minus increase-dash"></i></span> <span class="' +
                        t +
                        '"></span>'
                    );
                },
            },
            breakpoints: {
                1200: { slidesPerView: 1 },
                768: { slidesPerView: 1 },
                320: { slidesPerView: 1 },
            },
        }));
    var o = document.getElementById("client_cursor"),
        i = document.getElementById("team_cursor"),
        r = document.getElementById("portf_cursor_6"),
        a = document.getElementById("featured_cursor"),
        n = document.getElementById("portfolio4_cursor");
    (document.addEventListener("mousemove", function e(t) {
        try {
            let s = t.target,
                l = gsap.timeline({ defaults: { x: t.clientX, y: t.clientY } }),
                c = gsap.timeline({ defaults: { x: t.clientX, y: t.clientY } });
            (s.closest(".testimonial__img")
                ? l.to(o, { opacity: 1, ease: "power4.out" }, "-=0.3")
                : c.to(o, { opacity: 0, ease: "power4.out" }, "-=0.3"),
                s.closest(".team__slider")
                    ? l.to(i, { opacity: 1, ease: "power4.out" }, "-=0.3")
                    : c.to(i, { opacity: 0, ease: "power4.out" }, "-=0.3"),
                s.closest(".portfolio__item-6")
                    ? l.to(r, { opacity: 1, ease: "power4.out" }, "-=0.3")
                    : c.to(r, { opacity: 0, ease: "power4.out" }, "-=0.3"),
                s.closest(".portfolio__item-6")
                    ? l.to(r, { opacity: 1, ease: "power4.out" }, "-=0.3")
                    : c.to(r, { opacity: 0, ease: "power4.out" }, "-=0.3"),
                s.closest(".portfolio__slider-3")
                    ? l.to(a, { opacity: 1, ease: "power4.out" }, "-=0.3")
                    : c.to(a, { opacity: 0, ease: "power4.out" }, "-=0.3"),
                s.closest(".portfolio__area-5")
                    ? l.to(n, { opacity: 1, ease: "power4.out" }, "-=0.3")
                    : c.to(n, { opacity: 0, ease: "power4.out" }, "-=0.3"),
                l
                    .to(".cursor1", { ease: "power2.out" })
                    .to(".cursor2", { ease: "power2.out" }, "-=0.4"));
        } catch (d) {
            console.log(d);
        }
    }),
        e("#open_offcanvas").click(function () {
            (e(".offcanvas__area").css("opacity", "1"),
                e(".offcanvas__area").css("visibility", "visible"));
        }),
        e("#close_offcanvas").click(function () {
            (e(".offcanvas__area").css("opacity", "0"),
                e(".offcanvas__area").css("visibility", "hidden"));
        }));
    let s = document.getElementById("scroll_top");
    if (
        (s &&
            ((window.onscroll = function () {
                document.body.scrollTop > 50 ||
                document.documentElement.scrollTop > 50
                    ? (s.style.display = "block")
                    : (s.style.display = "none");
            }),
            s.addEventListener("click", function () {
                ((document.body.scrollTop = 0),
                    (document.documentElement.scrollTop = 0));
            })),
        t < 1365)
    ) {
        let l = document.querySelector(".header__area");
        l &&
            (window.onscroll = function () {
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
                    ? ((l.style.background = "#121212"),
                      l.style.setProperty("mix-blend-mode", "unset"),
                      s && (s.style.display = "block"))
                    : ((l.style.background = "#121212"),
                      l.style.setProperty("mix-blend-mode", "unset"),
                      s && (s.style.display = "none"));
            });
    }
    let c = document.querySelector(".header__area-2");
    c &&
        (window.onscroll = function () {
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
                ? ((c.style.background = "#121212"),
                  c.classList.add("sticky-2"),
                  s && (s.style.display = "block"))
                : ((c.style.background = "transparent"),
                  c.classList.remove("sticky-2"),
                  s && (s.style.display = "none"));
        });
    let d = document.querySelector(".header__area-3");
    d &&
        (window.onscroll = function () {
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
                ? (d.classList.add("sticky-3"),
                  s && (s.style.display = "block"))
                : (d.classList.remove("sticky-3"),
                  s && (s.style.display = "none"));
        });
    let p = document.querySelector(".header__area-5");
    p &&
        (window.onscroll = function () {
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
                ? (p.classList.add("sticky-5"),
                  s && (s.style.display = "block"))
                : (p.classList.remove("sticky-5"),
                  s && (s.style.display = "none"));
        });
    let u = document.querySelector(".header__search"),
        g = document.querySelector("#search_icon"),
        m = document.querySelector("#search_close");
    (u &&
        (g.addEventListener("click", function () {
            (u.classList.add("open-search"),
                (g.style.display = "none"),
                (m.style.display = "block"));
        }),
        m.addEventListener("click", function () {
            (u.classList.remove("open-search"),
                (g.style.display = "block"),
                (m.style.display = "none"));
        })),
        new Swiper(".roll__slider", {
            loop: !0,
            freemode: !0,
            slidesPerView: 4,
            spaceBetween: 0,
            centeredSlides: !0,
            allowTouchMove: !1,
            speed: 6e3,
            autoplay: { delay: 1, disableOnInteraction: !0 },
            breakpoints: {
                640: { slidesPerView: 1 },
                800: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
                1300: { slidesPerView: 4 },
                1900: { slidesPerView: 5 },
            },
        }),
        new Swiper(".roll__slider2", {
            loop: !0,
            freemode: !0,
            slidesPerView: 1,
            spaceBetween: 60,
            centeredSlides: !1,
            allowTouchMove: !1,
            speed: 1e4,
            autoplay: { delay: 1, disableOnInteraction: !0 },
        }),
        new Swiper(".workflow__slider", {
            loop: !0,
            freemode: !0,
            slidesPerView: 1,
            spaceBetween: 0,
            speed: 2e3,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
                1200: { slidesPerView: 4 },
            },
        }),
        new Swiper(".team__slider", {
            spaceBetween: 30,
            loop: !0,
            freemode: !0,
            slidesPerView: 1,
            speed: 2e3,
            breakpoints: {
                640: { slidesPerView: 2 },
                1e3: { slidesPerView: 3 },
                1200: { slidesPerView: 4 },
            },
        }),
        new Swiper(".testimonial__slider", {
            spaceBetween: 0,
            loop: !0,
            freemode: !0,
            slidesPerView: 1,
            speed: 2e3,
            navigation: { nextEl: ".next-button", prevEl: ".prev-button" },
        }),
        new Swiper(".testimonial__slider-3", {
            spaceBetween: 0,
            loop: !0,
            freemode: !0,
            slidesPerView: 1,
            speed: 2e3,
            navigation: { nextEl: ".next-button", prevEl: ".prev-button" },
        }));
    var y = e(".portfolio__item-6").length;
    (y && e(".portfolio__total").html(y),
        e(document).on("scroll", function () {
            e(".portfolio__item-6").each(function () {
                if (
                    e(this).position().top <= e(document).scrollTop() &&
                    e(this).position().top + e(this).outerHeight() >
                        e(document).scrollTop()
                ) {
                    var t = e(this).data("portfitem");
                    (e(".portfolio__current").html(t),
                        e(this)
                            .addClass("active")
                            .siblings()
                            .removeClass("active"));
                }
            });
        }),
        e(".service__list a:nth-child(1)")
            .addClass("active")
            .siblings()
            .removeClass("acitve"),
        e(".service__item").on("mousemove", function (t) {
            var o = e(this).data("service");
            (e(".service__img.img-" + o)
                .addClass("active")
                .siblings()
                .removeClass("active"),
                e(".shape-box-" + o)
                    .addClass("current")
                    .siblings()
                    .removeClass("current"),
                1 != o &&
                    e(".service__list a:nth-child(1)").removeClass("active"));
        }),
        e(".service__item").on("mouseout", function (t) {
            var o = e(this).data("service");
            e(".service__list a:nth-child(" + o + ")")
                .addClass("active")
                .siblings()
                .removeClass("active");
        }));
    let h = window.counterUp.default,
        f = (e) => {
            e.forEach((e) => {
                let t = e.target;
                e.isIntersecting &&
                    !t.classList.contains("is-visible") &&
                    (h(t, { duration: 1e3, delay: 16 }),
                    t.classList.add("is-visible"));
            });
        },
        _ = new IntersectionObserver(f, { threshold: 1 }),
        v = document.querySelectorAll(".counter__number");
    (v.forEach((e) => {
        _.observe(e);
    }),
        e(".btn-hover").on("mouseenter", function (t) {
            var o = t.pageX - e(this).offset().left,
                i = t.pageY - e(this).offset().top;
            e(this).find("span").css({ top: i, left: o });
        }),
        e(".btn-hover").on("mouseout", function (t) {
            var o = t.pageX - e(this).offset().left,
                i = t.pageY - e(this).offset().top;
            e(this).find("span").css({ top: i, left: o });
        }));
    let w = gsap.utils.toArray(".btn_wrapper");
    if (w.length > 0) var b = gsap.utils.toArray(".btn_wrapper");
    else var b = gsap.utils.toArray("#btn_wrapper");
    let x = gsap.utils.toArray(".btn-item");
    if (
        (b.forEach((t, o) => {
            (e(t).mousemove(function (i) {
                var r, a, n, s, l, c, d;
                ((r = i),
                    (s = 80),
                    (a = r),
                    (n = x[o]),
                    (l = e(t)),
                    (c = a.pageX - l.offset().left),
                    (d = a.pageY - l.offset().top),
                    gsap.to(n, 0.5, {
                        x: ((c - l.width() / 2) / l.width()) * s,
                        y: ((d - l.height() / 2) / l.height()) * s,
                        ease: Power2.easeOut,
                    }));
            }),
                e(t).mouseleave(function (e) {
                    gsap.to(x[o], 0.5, { x: 0, y: 0, ease: Power2.easeOut });
                }));
        }),
        gsap.registerPlugin(
            ScrollTrigger,
            ScrollSmoother,
            TweenMax,
            ScrollToPlugin,
        ),
        gsap.config({ nullTargetWarn: !1 }),
        t > 1200)
    ) {
        (gsap.to(".service__list-6", {
            scrollTrigger: {
                trigger: ".service__area-6",
                pin: ".service__list-6",
                pinSpacing: !0,
                start: "top top",
                end: "bottom bottom",
            },
        }),
            gsap.to(".service__image-wrap", {
                scrollTrigger: {
                    trigger: ".service__area-6",
                    pin: ".mid-content",
                    pinSpacing: !0,
                    start: "top top",
                    end: "bottom bottom",
                    markers: !1,
                },
            }));
        let E = gsap.utils.toArray(".service__image"),
            k = gsap.utils.toArray(".service__image img"),
            L = gsap.utils.toArray(".service__item-6");
        L &&
            L.forEach((e, t) => {
                console.log(E[t].img);
                let o = gsap.timeline({
                    scrollTrigger: {
                        trigger: e,
                        scrub: 1,
                        start: "top top-=600",
                        markers: !1,
                    },
                });
                (o.to(E[t], { zIndex: "1" }),
                    o.to(
                        k[t],
                        {
                            opacity: 0,
                            duration: 1,
                            scale: 1.2,
                            ease: "power4.out",
                        },
                        "-=1",
                    ));
            });
        let S = gsap.utils.toArray(".service__list-6 li a");
        (S &&
            S.forEach((e) => {
                e.addEventListener("click", (t) => {
                    t.preventDefault();
                    let o = e.getAttribute("href");
                    gsap.to(window, {
                        duration: 0.5,
                        scrollTo: o,
                        ease: "power4.out",
                    });
                });
            }),
            e(document).on("scroll", function () {
                e(".service__item-6").each(function () {
                    if (
                        e(this).position().top <= e(document).scrollTop() &&
                        e(this).position().top + e(this).outerHeight() >
                            e(document).scrollTop()
                    ) {
                        var t = e(this).data("secid");
                        e(".service__list-6 li:nth-child(" + t + ")")
                            .addClass("active")
                            .siblings()
                            .removeClass("active");
                    }
                });
            }));
    }
    if (t > 1200 && document.querySelector(".workflow__wrapper-3")) {
        let A = gsap.utils.toArray(".wf_panel"),
            T = 1 / (A.length - 1),
            C = gsap.timeline({
                scrollTrigger: {
                    trigger: ".workflow__wrapper-3",
                    pin: !0,
                    scrub: 1,
                    start: "top top",
                    end: "+=5000",
                },
            });
        (C.to(A, {
            xPercent: -100 * (A.length - 1),
            duration: 1,
            ease: "none",
        }),
            A.forEach((e, t) => {
                let o = gsap.from(e, {
                    opacity: 0,
                    scale: 0.6,
                    duration: 0.5,
                    force3D: !0,
                    paused: !0,
                });
                ((function e(
                    t,
                    {
                        start: o,
                        end: i,
                        param: r,
                        onEnter: a,
                        onLeave: n,
                        onEnterBack: s,
                        onLeaveBack: l,
                    },
                ) {
                    var c;
                    let d = (e) => e,
                        p,
                        u;
                    (t.direction ||
                        ((p = (c = t).eventCallback("onUpdate")),
                        (u = c.time()),
                        (c.direction = c.reversed() ? -1 : 1),
                        c.eventCallback("onUpdate", () => {
                            let e = c.time();
                            (u !== e &&
                                ((c.direction = e < u ? -1 : 1), (u = e)),
                                p && p.call(c));
                        })),
                        o >= 0 &&
                            t.add(() => ((t.direction < 0 ? l : a) || d)(r), o),
                        i <= t.duration() &&
                            t.add(
                                () => ((t.direction < 0 ? s : n) || d)(r),
                                i,
                            ));
                })(C, {
                    start: T * (t - 0.99),
                    end: T * (t + 0.99),
                    onEnter: () => o.play(),
                    onLeave: () => o.reverse(),
                    onEnterBack: () => o.play(),
                    onLeaveBack: () => o.reverse(),
                }),
                    t || o.progress(1));
            }));
    }
    if (t > 100) {
        let q = gsap.quickTo(".portfolio__item-5 img", "skewY"),
            P = gsap.utils.clamp(-15, 15);
        ScrollSmoother.create({
            smooth: 1.35,
            effects: !(t < 1025),
            smoothTouch: !1,
            normalizeScroll: !1,
            ignoreMobileResize: !0,
            onUpdate: (e) => q(P(-(e.getVelocity() / 80))),
            onStop: () => q(0),
        });
        gsap.utils.toArray(".title-anim").forEach((e) => {
            let t = gsap.timeline({
                    scrollTrigger: {
                        trigger: e,
                        start: "top 90%",
                        end: "bottom 60%",
                        scrub: !1,
                        markers: !1,
                        toggleActions: "play none none none",
                    },
                }),
                o = new SplitText(e, { type: "words, lines" });
            (gsap.set(e, { perspective: 400 }),
                o.split({ type: "lines" }),
                t.from(o.lines, {
                    duration: 1,
                    delay: 0.3,
                    opacity: 0,
                    rotationX: -80,
                    force3D: !0,
                    transformOrigin: "top center -50",
                    stagger: 0.1,
                }));
        });
        gsap.utils.toArray(".text-anim p").forEach((e) => {
            let t = gsap.timeline({
                    scrollTrigger: {
                        trigger: e,
                        start: "top 90%",
                        duration: 2,
                        end: "bottom 60%",
                        scrub: !1,
                        markers: !1,
                        toggleActions: "play none none none",
                    },
                }),
                o = new SplitText(e, { type: "lines" });
            (gsap.set(e, { perspective: 400 }),
                o.split({ type: "lines" }),
                t.from(o.lines, {
                    duration: 1,
                    delay: 0.5,
                    opacity: 0,
                    rotationX: -80,
                    force3D: !0,
                    transformOrigin: "top center -50",
                    stagger: 0.1,
                }));
        });
        gsap.utils.toArray(".text-anim-top").forEach((e) => {
            let t = gsap.timeline({
                    scrollTrigger: {
                        trigger: e,
                        start: "top 100%",
                        toggleActions: "play none play reset",
                    },
                }),
                o = new SplitText(e, { type: "words" }),
                i = o.words.length;
            gsap.delayedCall(0.05, function () {
                for (var e = 0; e < i; e++)
                    t.from(
                        o.words[e],
                        1,
                        {
                            force3D: !0,
                            scale: Math.random() > 0.5 ? 0 : 2,
                            opacity: 0,
                        },
                        Math.random(),
                    );
            });
        });
    }
    jQuery(document).ready(function () {
        e(".offcanvas__menu").meanmenu({
            meanScreenWidth: "5000",
            meanMenuContainer: ".offcanvas__menu-wrapper",
            meanMenuCloseSize: "36px",
        });
    });
    let B = document.querySelectorAll(".service__item-3");
    B.forEach((e, t) => {
        e.addEventListener("mousemove", (t) => {
            setInterval(
                (function e(t, o) {
                    let i = o.getBoundingClientRect(),
                        r = t.clientX - i.x,
                        a = t.clientY - i.y;
                    o.children[3].style.transform = `translate(${r}px, ${a}px)`;
                })(t, e),
                1e3,
            );
        });
    });
    let D = gsap.timeline({
        repeat: -1,
        delay: 0.5,
        scrollTrigger: { trigger: ".end", start: "bottom 100%-=50px" },
    });
    (gsap.set(".end", { opacity: 0 }),
        gsap.to(".end", {
            opacity: 1,
            duration: 1,
            ease: "power2.out",
            scrollTrigger: {
                trigger: ".end",
                start: "bottom 100%-=50px",
                once: !0,
            },
        }));
    let V = new SplitText(".end", { type: "words,chars" }).chars,
        I = chroma.scale(["#F9D371", "#F47340", "#EF2F88", "#8843F2"]);
    (D.to(V, {
        duration: 0.5,
        scaleY: 0.6,
        ease: "power3.out",
        stagger: 0.04,
        transformOrigin: "center bottom",
    }),
        D.to(
            V,
            { yPercent: -20, ease: "elastic", stagger: 0.03, duration: 0.8 },
            0.5,
        ),
        D.to(
            V,
            {
                scaleY: 1,
                ease: "elastic.out(2.5, 0.2)",
                stagger: 0.03,
                duration: 1.5,
            },
            0.5,
        ),
        D.to(
            V,
            {
                color: (e, t, o) => I(e / o.length).hex(),
                ease: "power2.out",
                stagger: 0.03,
                duration: 0.3,
            },
            0.5,
        ),
        D.to(
            V,
            { yPercent: 0, ease: "back", stagger: 0.03, duration: 0.8 },
            0.7,
        ),
        D.to(V, { color: "#c9f31d", duration: 1.4, stagger: 0.05 }),
        document
            .querySelectorAll(".menu-anim > li > a")
            .forEach(
                (e) =>
                    (e.innerHTML =
                        '<div class="menu-text"><span>' +
                        e.textContent.split("").join("</span><span>") +
                        "</span></div>"),
            ),
        setTimeout(() => {
            document.querySelectorAll(".menu-text span").forEach((e) => {
                let t = parseInt(
                        window
                            .getComputedStyle(e, null)
                            .getPropertyValue("font-size")
                            .replace("px", ""),
                    ),
                    o = parseInt(t / 3);
                ((o += "px"), " " == e.innerHTML && (e.style.width = o));
            });
        }, 1e3),
        ScrollTrigger.create({
            trigger: ".portfolio__wrapper-6",
            start: "top top",
            end: "bottom bottom",
            pin: ".portfolio__title-wrap-6",
            pinSpacing: !1,
        }));
    let M = document.querySelector("#video_check"),
        H = document.querySelector(".hero__area-3");
    M &&
        M.addEventListener("click", function () {
            let e = document.querySelector(".video-title"),
                t = document.querySelector(".video-title.close-video-title");
            M.checked
                ? ((document.querySelector(".wrapper").style.zIndex = "1"),
                  (e.style.display = "none"),
                  (t.style.display = "block"),
                  H.classList.add("start-video"),
                  document
                      .querySelector(".header__area-3")
                      .classList.add("bg-white"))
                : ((document.querySelector(".wrapper").style.zIndex = "999"),
                  (e.style.display = "block"),
                  (t.style.display = "none"),
                  H.classList.remove("start-video"),
                  document
                      .querySelector(".header__area-3")
                      .classList.remove("bg-white"));
        });
    let Y = gsap.timeline(),
        z = new SplitText(".sec-title-3", { type: "chars" }).chars;
    if (
        (Y.from(z, {
            rotate: 20,
            ease: "back.out",
            opacity: 0,
            duration: 2,
            stagger: 0.1,
        }),
        Y.from(".hero2-shape img", { xPercent: -100, duration: 1 }, "-=6.5"),
        Y.from(".hero__text-2 p", { opacity: 0, x: -30, duration: 1.5 }, "-=5"),
        document.querySelector(".hero__text-2 .btn_wrapper"))
    )
        var X = document.querySelector(".hero__text-2 .btn_wrapper");
    else var X = document.querySelector(".hero__text-2 #btn_wrapper");
    Y.from(X, { opacity: 0, y: -70, ease: "bounce", duration: 1.5 }, "-=5");
    let U = gsap.utils.toArray("#btn_wrapper"),
        R = gsap.utils.toArray(".btn_wrapper"),
        O = U.concat(R);
    O.forEach((e) => {
        e.classList.contains("hero__button") ||
            gsap.from(e, {
                scrollTrigger: {
                    trigger: e,
                    start: "top center+=150",
                    markers: !1,
                },
                opacity: 0,
                y: -70,
                ease: "bounce",
                duration: 1.5,
            });
    });
    gsap.timeline({
        scrollTrigger: {
            trigger: ".about__img-2",
            start: "top bottom",
            markers: !1,
            scrub: 1,
            end: "bottom center",
        },
    }).to(".about__img-2 img", { scale: 1.15, duration: 1 });
    let W = gsap.timeline({
        scrollTrigger: { trigger: ".award__text", start: "top center+=150" },
    });
    if (
        (gsap.set(".award__text", { opacity: 0, y: -500 }),
        W.to(".award__text", { opacity: 1, y: 0, duration: 2, ease: "bounce" }),
        gsap.set(".award__text-2", { opacity: 0, y: -500 }),
        W.to(
            ".award__text-2",
            { opacity: 1, y: 0, duration: 2, ease: "bounce" },
            "-=1.5",
        ),
        W.to(".award__text", { x: -100, duration: 2 }, "-=1"),
        W.to(".award__text-2", { x: -100, duration: 2 }, "-=1"),
        W.to(".award__text", { x: 0, duration: 2 }, "-=1"),
        W.to(".award__text-2", { x: 0, duration: 2 }, "-=1"),
        t > 767)
    ) {
        let F = gsap.timeline({
            scrollTrigger: {
                trigger: ".portfolio__area",
                start: "top center-=200",
                pin: ".portfolio__text",
                end: "bottom bottom+=80",
                markers: !1,
                pinSpacing: !1,
                scrub: 1,
            },
        });
        (F.to(".portfolio__text", { scale: 3, duration: 1 }),
            F.to(".portfolio__text", { scale: 3, duration: 1 }),
            F.to(".portfolio__text", { scale: 1, duration: 1 }, "+=2"));
    }
    (gsap.utils.toArray(".portfolio__item").forEach((e, t) => {
        gsap.set(e, { opacity: 0.7 });
        let o = gsap.timeline();
        (o.set(e, { position: "relative" }),
            o.to(e, {
                scrollTrigger: {
                    trigger: e,
                    scrub: 2,
                    duration: 1.5,
                    start: "top bottom+=100",
                    end: "bottom center",
                    markers: !1,
                },
                scale: 1,
                opacity: 1,
                rotateX: 0,
            }));
    }),
        gsap.to(".bg_image img", {
            xPercent: -18,
            scrollTrigger: {
                trigger: ".portfolio__area",
                start: "top top",
                end: "bottom center",
                pin: ".bg_image",
                scrub: 3,
            },
        }),
        new Swiper(".portfolio__slider-2", {
            slidesPerView: 1,
            spaceBetween: 0,
            effect: "fade",
            speed: 1500,
            loop: !0,
            autoplay: { delay: 5e3, disableOnInteraction: !1 },
            pagination: {
                el: ".swiper-pagination",
                clickable: !0,
                renderBullet: function (e, t) {
                    return `
        <button class="${t}">
          <svg class="circle-progress"><circle class="circle-origin" r="24.5" cx="25" cy="25"></circle></svg><span></span>
        </button>
      `;
                },
            },
        }));
    var N = new Swiper(".portfolio__project-thumbs", {
        loop: !0,
        spaceBetween: 0,
        slidesPerView: 1,
        freeMode: !0,
        watchSlidesProgress: !0,
        allowTouchMove: !1,
    });
    function G(e, t) {
        let o = document.querySelector(e);
        try {
            o &&
                o.addEventListener("mousemove", (e) => {
                    var o = e.clientX,
                        i = e.clientY;
                    let r = window.innerWidth;
                    window.innerHeight;
                    let a = innerHeight / 2;
                    (o > r / 2
                        ? gsap.to(t, { x: 15, duration: 5, ease: "power4.out" })
                        : gsap.to(t, {
                              x: -15,
                              duration: 5,
                              ease: "power4.out",
                          }),
                        i > a
                            ? gsap.to(t, {
                                  y: 15,
                                  duration: 5,
                                  ease: "power4.out",
                              })
                            : gsap.to(t, {
                                  y: -15,
                                  duration: 5,
                                  ease: "power4.out",
                              }));
                });
        } catch (i) {
            console.log(i);
        }
    }
    if (
        (new Swiper(".portfolio__project-slider", {
            loop: !0,
            spaceBetween: 10,
            navigation: { nextEl: ".pp-next", prevEl: ".pp-prev" },
            thumbs: { swiper: N },
        }),
        new Swiper(".portfolio__slider-3", {
            speed: 1500,
            loop: !0,
            effect: "fade",
            autoplay: { delay: 5e3, disableOnInteraction: !1 },
            pagination: { el: ".swiper-pagination", type: "fraction" },
            navigation: { nextEl: ".pp-next", prevEl: ".pp-prev" },
        }),
        G(".solution__area", [".solution__wrapper img"]),
        G(".testimonial__area", ".testimonial__img img"),
        G(".testimonial__area-3", ".testimonial__area-3 img"),
        (function e(t, o) {
            let i = document.querySelector(t);
            try {
                i &&
                    i.addEventListener("mousemove", (e) => {
                        var t = e.clientX,
                            i = e.clientY;
                        let r = window.innerWidth;
                        window.innerHeight;
                        let a = innerHeight / 2;
                        (t > r / 2
                            ? gsap.to(o, {
                                  x: 60,
                                  duration: 5,
                                  ease: "power4.out",
                              })
                            : gsap.to(o, {
                                  x: -60,
                                  duration: 5,
                                  ease: "power4.out",
                              }),
                            i > a
                                ? gsap.to(o, {
                                      scale: 1.15,
                                      duration: 5,
                                      ease: "power4.out",
                                  })
                                : gsap.to(o, {
                                      scale: 1,
                                      duration: 5,
                                      ease: "power4.out",
                                  }));
                    });
            } catch (r) {
                console.log(r);
            }
        })(".portfolio-section", ".portfolio__hero img"),
        gsap.set(".counter_animation .counter__anim", { y: -100, opacity: 0 }),
        t < 1023)
    ) {
        let j = gsap.utils.toArray(".counter_animation .counter__anim");
        j.forEach((e, t) => {
            gsap.timeline({
                scrollTrigger: { trigger: e, start: "top center+=200" },
            }).to(e, { y: 0, opacity: 1, ease: "bounce", duration: 1.5 });
        });
    } else
        gsap.to(".counter_animation .counter__anim", {
            scrollTrigger: {
                trigger: ".counter_animation",
                start: "top center+=300",
            },
            y: 0,
            opacity: 1,
            ease: "bounce",
            duration: 1.5,
            stagger: { each: 0.3 },
        });
    if (
        (gsap.set(".fade_left", { x: -20, opacity: 0 }),
        gsap.to(".fade_left", {
            scrollTrigger: { trigger: ".fade_left", start: "top center+=300" },
            x: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1,
            stagger: { each: 0.2 },
        }),
        gsap.set(".fade_bottom", { y: 30, opacity: 0 }),
        t < 1023)
    ) {
        let Z = gsap.utils.toArray(".fade_bottom");
        Z.forEach((e, t) => {
            gsap.timeline({
                scrollTrigger: { trigger: e, start: "top center+=200" },
            }).to(e, { y: 0, opacity: 1, ease: "power2.out", duration: 1.5 });
        });
    } else
        gsap.to(".fade_bottom", {
            scrollTrigger: {
                trigger: ".fade_bottom",
                start: "top center+=300",
                markers: !1,
            },
            y: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1,
            stagger: { each: 0.2 },
        });
    if (
        (gsap.set(".blog__animation .blog__item", { x: 50, opacity: 0 }),
        t < 1023)
    ) {
        let K = gsap.utils.toArray(".blog__animation .blog__item");
        K.forEach((e, t) => {
            gsap.timeline({
                scrollTrigger: { trigger: e, start: "top center+=200" },
            }).to(e, { x: 0, opacity: 1, ease: "power2.out", duration: 1.5 });
        });
    } else
        gsap.to(".blog__animation .blog__item", {
            scrollTrigger: {
                trigger: ".blog__animation .blog__item",
                start: "top center+=300",
                markers: !1,
            },
            x: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 2,
            stagger: { each: 0.3 },
        });
    if (
        (gsap.set(".blog__animation .blog__item-2", { x: 50, opacity: 0 }),
        t < 1023)
    ) {
        let J = gsap.utils.toArray(".blog__animation .blog__item-2");
        J.forEach((e, t) => {
            gsap.timeline({
                scrollTrigger: { trigger: e, start: "top center+=200" },
            }).to(e, { x: 0, opacity: 1, ease: "power2.out", duration: 1.5 });
        });
    } else
        gsap.to(".blog__animation .blog__item-2", {
            scrollTrigger: {
                trigger: ".blog__animation .blog__item-2",
                start: "top center+=300",
                markers: !1,
            },
            x: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 2,
            stagger: { each: 0.3 },
        });
    if (
        (gsap.set(".blog__animation .blog__item-3", { x: 50, opacity: 0 }),
        t < 1023)
    ) {
        let Q = gsap.utils.toArray(".blog__animation .blog__item-3");
        Q.forEach((e, t) => {
            gsap.timeline({
                scrollTrigger: { trigger: e, start: "top center+=200" },
            }).to(e, { x: 0, opacity: 1, ease: "power2.out", duration: 1.5 });
        });
    } else
        gsap.to(".blog__animation .blog__item-3", {
            scrollTrigger: {
                trigger: ".blog__animation .blog__item-3",
                start: "top center+=300",
                markers: !1,
            },
            x: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 2,
            stagger: { each: 0.3 },
        });
    (gsap.set(".zoom_in", { opacity: 0, y: 30, scale: 0.5 }),
        gsap.to(".zoom_in", {
            scrollTrigger: {
                trigger: ".zoom_in",
                start: "top center+=200",
                markers: !1,
            },
            y: 0,
            opacity: 1,
            scale: 1,
            ease: "power2.out",
            duration: 1,
            stagger: { each: 0.2 },
        }));
    let ee = gsap.utils.toArray(".service_animation"),
        et = gsap.utils.toArray(".service_animation h3"),
        eo = gsap.utils.toArray(".service_animation .service__content-3");
    (ee.forEach((e, t) => {
        gsap.set([et[t], eo[t]], { x: -30, opacity: 0 });
        let o = gsap.timeline({
            scrollTrigger: {
                trigger: e,
                start: "top center+=200",
                markers: !1,
            },
        });
        (o.to(et[t], {
            x: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1.5,
            stagger: { each: 0.2 },
        }),
            o.to(
                eo[t],
                {
                    x: 0,
                    opacity: 1,
                    ease: "power2.out",
                    duration: 1.5,
                    stagger: { each: 0.2 },
                },
                "-=1",
            ));
    }),
        gsap.set(".testimonial__inner-2", { opacity: 0, x: -100 }),
        gsap.to(".testimonial__inner-2", {
            scrollTrigger: {
                trigger: ".testimonial__slider-wrapper-2",
                start: "top center+=100",
                end: "bottom bottom",
            },
            opacity: 1,
            x: 0,
            duration: 1,
        }),
        gsap.set(".animation_image_zoom img", { opacity: 0, scale: 0.5 }),
        gsap.to(".animation_image_zoom img", {
            scrollTrigger: {
                trigger: ".testimonial__area-3",
                start: "top center+=200",
                markers: !1,
            },
            opacity: 1,
            scale: 1,
            x: 20,
            ease: "power2.out",
            duration: 2.5,
            stagger: { each: 0.3 },
        }));
    let ei = gsap.timeline({
        scrollTrigger: { trigger: ".price__table", start: "top center" },
    });
    (gsap.set(".animation_from_bottom", { yPercent: 50 }),
        ei.to(".animation_from_bottom", {
            yPercent: 0,
            duration: 2,
            ease: "power4.out",
        }),
        gsap.set(".animation_from_top", { yPercent: -50, opacity: 0 }),
        ei.to(
            ".animation_from_top",
            { yPercent: 0, duration: 2, opacity: 1, ease: "power4.out" },
            "-=2",
        ));
    let er = gsap.utils.toArray(".animation__service-2 .service__item-2");
    (gsap.set(er, { opacity: 0, x: -30 }),
        er &&
            (t < 1023
                ? er.forEach((e, t) => {
                      gsap.to(e, {
                          scrollTrigger: {
                              trigger: e,
                              start: "top center+=200",
                              markers: !1,
                          },
                          opacity: 1,
                          x: 0,
                          ease: "power2.out",
                          duration: 2,
                          stagger: { each: 0.4 },
                      });
                  })
                : gsap.to(".animation__service-2 .service__item-2", {
                      scrollTrigger: {
                          trigger: ".animation__service-2",
                          start: "top center+=200",
                          markers: !1,
                      },
                      opacity: 1,
                      x: 0,
                      ease: "power2.out",
                      duration: 2,
                      stagger: { each: 0.4 },
                  })));
    let ea = gsap.utils.toArray(".animation_home1_service"),
        en = gsap.utils.toArray(
            ".animation_home1_service .service__number span",
        ),
        es = gsap.utils.toArray(".animation_home1_service .service__title"),
        el = gsap.utils.toArray(".animation_home1_service .service__text p"),
        ec = gsap.utils.toArray(".animation_home1_service .service__link p");
    ea.forEach((e, t) => {
        gsap.set([en[t], es[t], el[t], ec[t]], { opacity: 0, x: -50 });
        let o = gsap.timeline({
            scrollTrigger: {
                trigger: e,
                start: "top center+=300",
                end: "bottom bottom",
                markers: !1,
            },
        });
        (o.to(en[t], { x: 0, opacity: 1, duration: 1.2 }),
            o.to(es[t], { x: 0, opacity: 1, duration: 1.2 }, "-=1"),
            o.to(el[t], { x: 0, opacity: 1, duration: 1.2 }, "-=1"),
            o.to(ec[t], { x: 0, opacity: 1, duration: 1.2 }, "-=1"));
    });
    let ed = gsap.utils.toArray(".animation__feature2 .feature__item");
    t < 1023
        ? ed.forEach((e, t) => {
              gsap.set(e, { opacity: 0, y: 60 });
              gsap.timeline({
                  scrollTrigger: { trigger: e, start: "top center+=200" },
              }).to(e, { opacity: 1, y: 0, duration: 1.5, ease: "power4.out" });
          })
        : (gsap.set(".animation__feature2 .feature__item", {
              opacity: 0,
              y: 40,
          }),
          gsap.to(".animation__feature2 .feature__item", {
              scrollTrigger: {
                  trigger: ".animation__feature2",
                  start: "top center+=200",
              },
              opacity: 1,
              y: 0,
              duration: 2,
              ease: "power4.out",
              stagger: 0.3,
          }));
    let ep = gsap.utils.toArray(".portfolio__item-6 img");
    ep &&
        ep.forEach((e, t) => {
            gsap.from(e, {
                scrollTrigger: { trigger: e, start: "top center", scrub: 1.5 },
                scale: 2.5,
                duration: 1,
            });
        });
    let eu = Math.ceil(
            document.querySelectorAll(".portfolio__item-5").length / 3,
        ),
        e$ = document.getElementById("items__border");
    for (let eg = 0; eg < eu; eg++)
        e$.innerHTML += '<span class="sec-line"></span> ';
    let em = 100 / eu;
    document.querySelectorAll("#items__border .sec-line").forEach((e, t) => {
        ((e.style.top = `${em * (t + 1)}%`), (e.style.opacity = 1));
    });
    document.querySelectorAll(".animation__char_come").forEach((e) => {
        let t = new SplitText(e, { type: "chars, words" });
        gsap.from(t.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.05 });
    });
    document.querySelectorAll(".animation__char_come_long").forEach((e) => {
        let t = new SplitText(e, { type: "chars, words" });
        gsap.from(t.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.15 });
    });
    let ey = document.querySelector(".animation__char_up"),
        eh = new SplitText(ey, { type: "chars, words" });
    gsap.from(eh.chars, { duration: 1, y: 15, autoAlpha: 0, stagger: 0.05 });
    let ef = document.querySelector(".animation__word_up"),
        e8 = new SplitText(ef, { type: "words", position: "absolute" });
    gsap.from(e8.words, { duration: 1, y: 50, autoAlpha: 0, stagger: 0.05 });
    document.querySelectorAll(".animation__word_come").forEach((e) => {
        let t = new SplitText(e, { type: "chars words", position: "absolute" });
        gsap.from(t.words, { duration: 1, x: 50, autoAlpha: 0, stagger: 0.05 });
    });
    document.querySelectorAll(".animation__word_come_long").forEach((e) => {
        let t = new SplitText(e, { type: "chars words", position: "absolute" });
        gsap.from(t.words, { duration: 1, x: 50, autoAlpha: 0, stagger: 0.5 });
    });
    let e_ = gsap.utils.toArray(".animation__service_page");
    e_ &&
        e_.forEach((e, t) => {
            gsap.from(e, {
                scrollTrigger: {
                    trigger: e,
                    start: "top center+=20%",
                    markers: !1,
                },
                opacity: 0,
                x: -50,
                ease: "power2.out",
                duration: 2,
            });
        });
    var ev = window.matchMedia("( max-width: 1300px )");
    if (document.querySelector(".portfolio__main-slider")) {
        var ew = function () {
                new Swiper(".portfolio__main-slider", {
                    allowTouchMove: !1,
                    slidesPerView: 1,
                    spaceBetween: 0,
                    mousewheel: !0,
                    effect: "fade",
                    pagination: { el: ".swiper-pagination", clickable: !0 },
                });
            },
            eb = function () {
                if (!0 === ev.matches) {
                    void 0 !== pp_main && pp_main.destroy(!0, !0);
                    return;
                }
                if (!1 === ev.matches) return ew();
            };
        (ev.addListener(eb), eb());
    }
    (new Swiper(".portfolio__slider-4", {
        speed: 1500,
        loop: !0,
        slidesPerView: 1,
        spaceBetween: 15,
        breakpoints: {
            768: { slidesPerView: 2 },
            1e3: { slidesPerView: 2, spaceBetween: 60 },
            1200: { slidesPerView: 2, spaceBetween: 90 },
            1400: { slidesPerView: 2, spaceBetween: 120 },
        },
    }),
        new Swiper(".testimonial__slider-4", {
            spaceBetween: 20,
            loop: !0,
            freemode: !0,
            slidesPerView: 3,
            speed: 2e3,
            pagination: { el: ".pagination", type: "fraction" },
            navigation: { nextEl: ".next-button", prevEl: ".prev-button" },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        }),
        e("#switcher_open").on("click", function () {
            (e(this).hide(),
                e("#switcher_close").show(),
                e(".switcher__icon").css("right", "280px"),
                e(".switcher__items").css({ right: "0" }));
        }),
        e("#switcher_close").on("click", function () {
            (e(this).hide(),
                e("#switcher_open").show(),
                e(".switcher__icon").css("right", "0"),
                e(".switcher__items").css({ right: "-280px" }));
        }),
        e(".mode-type button").on("click", function (t) {
            (e(this).addClass("active").siblings().removeClass("active"),
                "dark" == e(".mode-type button.active").attr("data-mode")
                    ? e("body").addClass("dark")
                    : e("body").removeClass("dark"));
        }),
        e(".lang_dir button").on("click", function (t) {
            (e(this).addClass("active").siblings().removeClass("active"),
                "rtl" == e(".lang_dir button.active").attr("data-mode")
                    ? e("body").addClass("dir-rtl")
                    : e("body").removeClass("dir-rtl"));
        }),
        e("#cursor_style").on("change", function () {
            "1" == e(this).val()
                ? (e(".cursor1").hide(), e(".cursor2").hide())
                : (e(".cursor1").show(), e(".cursor2").show());
        }));
    let e0 = document.querySelectorAll(".team__item-7");
    (e0.forEach((e, t) => {
        e.addEventListener("mousemove", (t) => {
            setInterval(
                (function e(t, o) {
                    let i = o.getBoundingClientRect(),
                        r = t.clientX - i.x,
                        a = t.clientY - i.y;
                    o.children[3].style.transform = `translate(${r}px, ${a}px)`;
                })(t, e),
                1e3,
            );
        });
    }),
        new Swiper(".portfolio__slider-7", {
            loop: !0,
            freemode: !0,
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: !0,
            speed: 2e3,
            breakpoints: {
                640: { slidesPerView: 2 },
                800: { slidesPerView: 2, spaceBetween: 50 },
                1200: { slidesPerView: 3, spaceBetween: 70 },
            },
        }));
    let ex = document.querySelector(".header__area-7");
    ex &&
        (window.onscroll = function () {
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
                ? (ex.classList.add("sticky-7"),
                  s && (s.style.display = "block"))
                : (ex.classList.remove("sticky-7"),
                  s && (s.style.display = "none"));
        });
    let eE = gsap.utils.toArray(".animation_service_7 .service__item-7");
    (gsap.set(eE, { opacity: 0, x: -30 }),
        eE &&
            (t < 1023
                ? eE.forEach((e, t) => {
                      gsap.to(e, {
                          scrollTrigger: {
                              trigger: e,
                              start: "top center+=200",
                              markers: !1,
                          },
                          opacity: 1,
                          x: -0,
                          ease: "power2.out",
                          duration: 2,
                          stagger: { each: 0.4 },
                      });
                  })
                : gsap.to(".animation_service_7 .service__item-7", {
                      scrollTrigger: {
                          trigger: ".animation_service_7",
                          start: "top center+=200",
                          markers: !1,
                      },
                      opacity: 1,
                      x: 0,
                      ease: "power2.out",
                      duration: 2,
                      stagger: { each: 0.4 },
                  })));
    let e3 = gsap.utils.toArray(".animation_workflow_6 .workflow__item-4");
    if (
        (e3 &&
            (t < 1023
                ? e3.forEach((e, t) => {
                      gsap.from(e, {
                          scrollTrigger: {
                              trigger: e,
                              start: "top center+=200",
                              markers: !1,
                          },
                          opacity: 0,
                          x: -30,
                          ease: "power2.out",
                          duration: 2,
                          stagger: { each: 0.4 },
                      });
                  })
                : gsap.from(".animation_workflow_6 .workflow__item-4", {
                      scrollTrigger: {
                          trigger: ".animation_workflow_6",
                          start: "top center+=200",
                          markers: !1,
                      },
                      opacity: 0,
                      x: -30,
                      ease: "power2.out",
                      duration: 2,
                      stagger: { each: 0.4 },
                  })),
        gsap.set(".blog__animation .blog__item-4", { x: 50, opacity: 0 }),
        t < 1023)
    ) {
        let ek = gsap.utils.toArray(".blog__animation .blog__item-4");
        ek.forEach((e, t) => {
            gsap.timeline({
                scrollTrigger: { trigger: e, start: "top center+=200" },
            }).to(e, { x: 0, opacity: 1, ease: "power2.out", duration: 1.5 });
        });
    } else
        gsap.to(".blog__animation .blog__item-4", {
            scrollTrigger: {
                trigger: ".blog__animation .blog__item-4",
                start: "top center+=300",
                markers: !1,
            },
            x: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 2,
            stagger: { each: 0.3 },
        });
    let eL = gsap.timeline();
    gsap.timeline();
    document.querySelector(".hero7__thum-anim") &&
        (document.querySelector(".image-1"),
        document.querySelector(".image-2"),
        document.querySelector(".image-3"),
        document.querySelector(".image-4"),
        gsap.from(".image-1", {
            x: 65,
            yPercent: 100,
            opacity: 0,
            duration: 2,
            delay: 1,
        }),
        gsap.from(".image-2", { delay: 1.5, scale: 0, duration: 1.5 }),
        gsap.from(".image-3", {
            x: 65,
            yPercent: -100,
            duration: 2,
            opacity: 0,
            delay: 1,
        }),
        gsap.from(".image-4", {
            xPercent: -100,
            yPercent: -100,
            duration: 2,
            opacity: 0,
            delay: 1,
        }));
    let eS = document.querySelector(".hero__area-3 .title-left"),
        e1 = document.querySelector(".hero__area-3 .title-right"),
        eA = document.querySelector(".hero__text-animation"),
        eT = new SplitText(eS, { type: "chars" }),
        eC = new SplitText(e1, { type: "chars" }),
        e2 = new SplitText(eA, { type: "chars words" });
    (eL.from(eT.chars, { duration: 2, x: 100, autoAlpha: 0, stagger: 0.2 }),
        eL.from(
            eC.chars,
            { duration: 1, x: 100, autoAlpha: 0, stagger: 0.1 },
            "-=1",
        ),
        eL.from(
            e2.words,
            { duration: 1, x: 50, autoAlpha: 0, stagger: 0.05 },
            "-=1",
        ));
    let eq = gsap.timeline(),
        eP = document.querySelector(".service__hero-right-2 .creative"),
        eB = document.querySelector(".service__hero-right-2 .solution"),
        e9 = document.querySelector(".service__hero-right-2 .animate_content"),
        e4 = new SplitText(eP, { type: "chars" }),
        eD = new SplitText(eB, { type: "chars" }),
        eV = new SplitText(e9, { type: "chars words" });
    (eq.from(e4.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.1 }),
        eq.from(
            eD.chars,
            { duration: 1, x: 70, autoAlpha: 0, stagger: 0.1 },
            "-=1.5",
        ),
        eq.from(
            eV.words,
            { duration: 1, x: 50, autoAlpha: 0, stagger: 0.05 },
            "-=1",
        ),
        gsap.set(".experience", { y: 50, opacity: 0 }));
    let eI = gsap.timeline(),
        e6 = document.querySelector(".hero__title"),
        eM = document.querySelector(".hero__sub-title"),
        e5 = new SplitText(e6, { type: "chars" }),
        eH = new SplitText(eM, { type: "chars words" });
    (eI.from(e5.chars, {
        duration: 0.35,
        x: 70,
        autoAlpha: 0,
        stagger: 0.1,
        delay: 1,
    }),
        eI.from(
            eH.words,
            { duration: 1, x: 50, autoAlpha: 0, stagger: 0.05, delay: 1 },
            "-=1",
        ),
        eI.to(
            ".experience",
            { y: 0, opacity: 1, duration: 2, ease: "power2.out" },
            "-=1.5",
        ));
    let eY = gsap.timeline(),
        e7 = document.querySelector(".hero__six_anim .hero__title-6"),
        ez = document.querySelector(".hero__six_anim p"),
        eX = document.querySelector(".hero__six_anim a"),
        eU = document.querySelector(".hero__right-6 img");
    (gsap.set(eU, { opacity: 0, y: 50 }), gsap.set(eX, { opacity: 0, y: 50 }));
    let eR = new SplitText(e7, { type: "chars" }),
        eO = new SplitText(ez, { type: "chars words" });
    if (
        (eY.from(eR.chars, { duration: 1, x: 70, autoAlpha: 0, stagger: 0.1 }),
        eY.from(
            eO.words,
            { duration: 1, x: 50, autoAlpha: 0, stagger: 0.05 },
            "-=1",
        ),
        eY.to(
            eX,
            { opacity: 1, y: 0, duration: 1, ease: "power2.out" },
            "-=1.5",
        ),
        eY.to(eU, { opacity: 1, y: 0, duration: 1, ease: "power2.out" }, "-=1"),
        gsap.set(".fade_bottom_2", { y: 30, opacity: 0 }),
        t < 1023)
    ) {
        let eW = gsap.utils.toArray(".fade_bottom_2");
        eW.forEach((e, t) => {
            gsap.timeline({
                scrollTrigger: { trigger: e, start: "top center+=200" },
            }).to(e, { y: 0, opacity: 1, ease: "power2.out", duration: 1.5 });
        });
    } else
        gsap.to(".fade_bottom_2", {
            scrollTrigger: {
                trigger: ".fade_bottom_2",
                start: "top center+=300",
                markers: !1,
            },
            y: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1,
            stagger: { each: 0.2 },
        });
    if ((gsap.set(".fade_bottom_3", { y: 30, opacity: 0 }), t < 1023)) {
        let eF = gsap.utils.toArray(".fade_bottom_3");
        eF.forEach((e, t) => {
            gsap.timeline({
                scrollTrigger: { trigger: e, start: "top center+=200" },
            }).to(e, { y: 0, opacity: 1, ease: "power2.out", duration: 1.5 });
        });
    } else
        gsap.to(".fade_bottom_3", {
            scrollTrigger: {
                trigger: ".fade_bottom_3",
                start: "top center+=300",
                markers: !1,
            },
            y: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1,
            stagger: { each: 0.2 },
        });
    if ((gsap.set(".fade_bottom_4", { y: 30, opacity: 0 }), t < 1023)) {
        let eN = gsap.utils.toArray(".fade_bottom_4");
        eN.forEach((e, t) => {
            gsap.timeline({
                scrollTrigger: { trigger: e, start: "top center+=200" },
            }).to(e, { y: 0, opacity: 1, ease: "power2.out", duration: 1.5 });
        });
    } else
        gsap.to(".fade_bottom_4", {
            scrollTrigger: {
                trigger: ".fade_bottom_4",
                start: "top center+=300",
                markers: !1,
            },
            y: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1,
            stagger: { each: 0.2 },
        });
    if ((gsap.set(".fade_bottom_5", { y: 30, opacity: 0 }), t < 1023)) {
        let eG = gsap.utils.toArray(".fade_bottom_5");
        eG.forEach((e, t) => {
            gsap.timeline({
                scrollTrigger: { trigger: e, start: "top center+=200" },
            }).to(e, { y: 0, opacity: 1, ease: "power2.out", duration: 1.5 });
        });
    } else
        gsap.to(".fade_bottom_5", {
            scrollTrigger: {
                trigger: ".fade_bottom_5",
                start: "top center+=300",
                markers: !1,
            },
            y: 0,
            opacity: 1,
            ease: "power2.out",
            duration: 1,
            stagger: { each: 0.2 },
        });
    new Swiper(".hero10_activition", {
        direction: "horizontal",
        loop: !0,
        speed: 1500,
        slidesPerView: 4,
        spaceBetween: 30,
        mousewheel: !0,
        mousewheelControl: !0,
        keyboard: !0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
            clickable: !0,
            renderFraction: function (e, t) {
                return (
                    '<span class="' +
                    e +
                    '"></span> <span><i class="fa-solid fa-minus increase-dash"></i></span> <span class="' +
                    t +
                    '"></span>'
                );
            },
        },
        breakpoints: {
            1400: { slidesPerView: 4 },
            1e3: { slidesPerView: 3 },
            768: { slidesPerView: 2 },
            320: { slidesPerView: 1 },
        },
    });
    let ej = document.querySelectorAll(".hover_wrap");
    ej &&
        ej.forEach((e, t) => {
            e.addEventListener("mousemove", (t) => {
                setInterval(
                    (function e(t, o) {
                        let i = o.getBoundingClientRect(),
                            r = t.clientX - i.x,
                            a = t.clientY - i.y;
                        o.children[0].style.transform = `translate(${r}px, ${a}px)`;
                    })(t, e),
                    1e3,
                );
            });
        });
    let eZ = document.querySelectorAll(".hover_8_wrap a"),
        eK = eZ.length;
    (1 == eK &&
        (eZ[0].addEventListener("mousemove", (e) => {
            (setInterval(
                (function e(t, o) {
                    let i = o[0].getBoundingClientRect(),
                        r = t.pageX,
                        a = t.clientY - i.y;
                    document.querySelector(".hover_8_img").style.transform =
                        `translate(${r}px, ${a}px)`;
                })(e, eZ),
                1e3,
            ),
                document.querySelector(".hover_8_img").classList.add("active"));
        }),
        eZ[0].addEventListener("mouseout", (e) => {
            document.querySelector(".hover_8_img").classList.remove("active");
        })),
        2 == eK &&
            (eZ[0].addEventListener("mousemove", (e) => {
                (setInterval(
                    (function e(t, o) {
                        let i = o[0].getBoundingClientRect(),
                            r = t.pageX,
                            a = t.clientY - i.y;
                        ((document.querySelector(
                            ".hover_8_img",
                        ).style.transform = `translate(${r}px, ${a}px)`),
                            console.log(t.pageX));
                    })(e, eZ),
                    1e3,
                ),
                    document
                        .querySelector(".hover_8_img")
                        .classList.add("active"));
            }),
            eZ[0].addEventListener("mouseout", (e) => {
                document
                    .querySelector(".hover_8_img")
                    .classList.remove("active");
            }),
            eZ[1].addEventListener("mousemove", (e) => {
                (setInterval(
                    (function e(t, o) {
                        let i = o[1].getBoundingClientRect(),
                            r = t.pageX,
                            a = t.clientY - i.y;
                        document.querySelector(
                            ".hover_8_img_2",
                        ).style.transform = `translate(${r}px, ${a}px)`;
                    })(e, eZ),
                    1e3,
                ),
                    document
                        .querySelector(".hover_8_img_2")
                        .classList.add("active"));
            }),
            eZ[1].addEventListener("mouseout", (e) => {
                document
                    .querySelector(".hover_8_img_2")
                    .classList.remove("active");
            })));
    if (document.querySelector(".slider9_images")) {
        document.querySelector(".slider9_images").style.display = "none";
        var eJ = 1;
        eJ = t > 767 ? 3 : 1;
        let eQ = document.getElementById("main"),
            te = [];
        var tt = document.querySelectorAll(".slide9_content"),
            to = document.querySelectorAll(".slide9_content h2"),
            tt = document.querySelectorAll(".slide9_content p"),
            ti = document.querySelectorAll(".slider9_image img"),
            tr = [],
            ta = [],
            tn = [];
        (ti.forEach((e) => {
            let t = e.getAttribute("src");
            tr.push(t);
        }),
            to.forEach((e) => {
                let t = e.innerHTML;
                ta.push(t);
            }),
            tt.forEach((e) => {
                let t = e.innerHTML;
                tn.push(t);
            }));
        let ts = 0,
            tl = !1;
        for (let tc = 0; tc < eJ; tc++) {
            let td = document.createElement("div");
            td.className = "part";
            let tp = document.createElement("a");
            ((tp.className = "section"),
                (tp.href = "http://127.0.0.1:5500/service-details.html"));
            let tu = document.createElement("img");
            ((tu.src = tr[ts]), tp.appendChild(tu));
            let t$ = document.createElement("h2");
            ((t$.innerHTML = ta[ts]), tp.appendChild(t$));
            let tg = document.createElement("p");
            ((tg.innerHTML = tn[ts]),
                tp.appendChild(tg),
                td.style.setProperty("--x", (-100 / eJ) * tc + "vw"),
                td.appendChild(tp),
                eQ.appendChild(td),
                te.push(td));
        }
        function tm(e, t, o) {
            return (1 - o) * e + o * t;
        }
        let ty = document.createElement("div");
        ty.className = "cursor";
        let th = document.createElement("div");
        th.className = "cursor-f";
        let tf = 0,
            t8 = 0,
            t_ = 0,
            tv = 0;
        (document.body.appendChild(ty),
            document.body.appendChild(th),
            "ontouchstart" in window &&
                ((ty.style.display = "none"), (th.style.display = "none")),
            ty.style.setProperty("--size", "8px"),
            th.style.setProperty("--size", "36px"),
            window.addEventListener("mousemove", function (e) {
                ((t_ = e.clientX),
                    (tv = e.clientY),
                    (ty.style.left = e.clientX - 4 + "px"),
                    (ty.style.top = e.clientY - 4 + "px"));
            }),
            !(function e() {
                ((tf = tm(tf, t_, 0.16)),
                    (t8 = tm(t8, tv, 0.16)),
                    (th.style.top = t8 - 18 + "px"),
                    (th.style.left = tf - 18 + "px"),
                    requestAnimationFrame(e));
            })());
        let tw = { duration: 2.3, ease: Power4.easeInOut };
        function tb(e) {
            if (!tl) {
                function t(e, t) {
                    (e.appendChild(t),
                        gsap
                            .to(e, { ...tw, y: -window.innerHeight })
                            .then(function () {
                                (e.children[0].remove(),
                                    gsap.to(e, { duration: 0, y: 0 }));
                            }));
                }
                function o(e, t) {
                    (e.prepend(t),
                        gsap.to(e, { duration: 0, y: -window.innerHeight }),
                        gsap.to(e, { ...tw, y: 0 }).then(function () {
                            (e.children[1].remove(), (tl = !1));
                        }));
                }
                for (let i in ((tl = !0),
                ts + e < 0
                    ? (ts = tr.length - 1)
                    : ts + e >= tr.length
                      ? (ts = 0)
                      : (ts += e),
                te)) {
                    let r = te[i],
                        a = document.createElement("a");
                    ((a.href = "http://127.0.0.1:5500/service-details.html"),
                        (a.className = "section"));
                    let n = document.createElement("img");
                    ((n.src = tr[ts]), a.appendChild(n));
                    let s = document.createElement("h2");
                    ((s.innerHTML = ta[ts]), a.appendChild(s));
                    let l = document.createElement("p");
                    ((l.innerHTML = tn[ts]),
                        a.appendChild(l),
                        (i - Math.max(0, e)) % 2 ? o(r, a) : t(r, a));
                }
            }
        }
        window.addEventListener("keydown", function (e) {
            ["ArrowDown", "ArrowRight"].includes(e.key)
                ? tb(1)
                : ["ArrowUp", "ArrowLeft"].includes(e.key) && tb(-1);
        });
        let t0,
            tx,
            tE = !1;
        function t3(e) {
            (gsap.to(ty, { scale: 4.5 }),
                gsap.to(th, { scale: 0.4 }),
                (tE = !0),
                (t0 =
                    e.clientY ||
                    e.touches[0].clientY ||
                    e.targetTouches[0].clientY));
        }
        function tk(e) {
            (gsap.to(ty, { scale: 1 }),
                gsap.to(th, { scale: 1 }),
                (tx = e.clientY || tx),
                tE &&
                    t0 &&
                    Math.abs(t0 - tx) >= 40 &&
                    (tb(Math.min(0, t0 - tx) ? -1 : 1),
                    (tE = !1),
                    (t0 = null),
                    (tx = null)));
        }
        (window.addEventListener("mousedown", t3, !1),
            window.addEventListener("touchstart", t3, !1),
            window.addEventListener(
                "touchmove",
                function (e) {
                    tE &&
                        (tx =
                            e.touches[0].clientY || e.targetTouches[0].clientY);
                },
                !1,
            ),
            window.addEventListener("touchend", tk, !1),
            window.addEventListener("mouseup", tk, !1));
        let tL;
        function tS(e) {
            (clearTimeout(tL),
                setTimeout(function () {
                    e.deltaY < -40 ? tb(-1) : e.deltaY >= 40 && tb(1);
                }));
        }
        (window.addEventListener("mousewheel", tS, !1),
            window.addEventListener("wheel", tS, !1));
        document.querySelectorAll("#main .part")[0].classList.add("showed");
    }
    let t1 = document.querySelectorAll(".wc-tilt"),
        tA = document.querySelectorAll(".wc-tilt-2");
    (t1 &&
        VanillaTilt.init(document.querySelectorAll(".wc-tilt"), {
            max: 15,
            speed: 3e3,
        }),
        tA &&
            VanillaTilt.init(document.querySelectorAll(".wc-tilt-2"), {
                max: 10,
                speed: 3e3,
            }),
        document.querySelectorAll(".showcase__content-16").forEach((e) => {
            gsap.to(e, {
                scrollTrigger: {
                    trigger: e,
                    pin: e,
                    pinSpacing: !1,
                    start: "top top",
                    delay: 1,
                },
            });
        }));
    gsap.timeline({
        scrollTrigger: {
            trigger: ".portfolio__big",
            start: "top top+=90",
            pin: !0,
            markers: !1,
            scrub: 1,
            pinSpacing: !1,
            end: "bottom bottom+=150",
        },
    }).to(".portfolio__big-inner", { width: "100%" });
    let tT = document.querySelectorAll(".portfolio__item-12");
    tT.forEach((e, t) => {
        e.addEventListener("mousemove", (t) => {
            setInterval(
                (function e(t, o) {
                    let i = o.getBoundingClientRect(),
                        r = t.clientX - i.x,
                        a = t.clientY - i.y;
                    o.children[3].style.transform = `translate(${r}px, ${a}px)`;
                })(t, e),
                1e3,
            );
        });
    });
    (document.querySelector(".showcase-mixitup") &&
        mixitup(".showcase-mixitup"),
        gsap.to(".showcase__menu-4", {
            scrollTrigger: {
                trigger: ".showcase__area-4",
                pin: ".showcase__menu-4",
                pinSpacing: !1,
                start: "top top",
                end: "bottom center",
                markers: !1,
                delay: 1,
            },
        }));
    let tC = new Swiper(".main-slider", {
            loop: !0,
            speed: 1500,
            parallax: !0,
            mousewheel: !0,
            loopAdditionalSlides: 6,
            grabCursor: !0,
            effect: "fade",
            watchSlidesProgress: !0,
            pagination: { el: ".swiper-pagination", clickable: !0 },
        }),
        t2 = new Swiper(".thumb-slider", {
            loop: !0,
            loopAdditionalSlides: 5,
            speed: 1500,
            spaceBetween: 15,
            centeredSlides: !0,
            touchRatio: 0.2,
            slideToClickedSlide: !0,
            direction: "vertical",
            breakpoints: {
                200: { slidesPerView: 3 },
                768: { slidesPerView: 5 },
                1024: { slidesPerView: 5 },
                1400: { slidesPerView: 7 },
            },
        });
    ((tC.controller.control = t2), (t2.controller.control = tC));
    let tq = new Swiper(".main-slider11", {
            loop: !0,
            speed: 1500,
            parallax: !0,
            mousewheel: !0,
            loopAdditionalSlides: 6,
            grabCursor: !0,
            effect: "fade",
            watchSlidesProgress: !0,
            direction: "vertical",
        }),
        tP = new Swiper(".thumb-slider11", {
            loop: !0,
            loopAdditionalSlides: 5,
            speed: 1500,
            centeredSlides: !0,
            touchRatio: 0.2,
            slideToClickedSlide: !0,
            direction: "vertical",
            breakpoints: {
                200: { slidesPerView: 6 },
                768: { slidesPerView: 6 },
                1200: { slidesPerView: 5 },
            },
        });
    ((tq.controller.control = tP),
        (tP.controller.control = tq),
        t > 767 &&
            gsap.to(".job__detail-sidebar", {
                scrollTrigger: {
                    trigger: ".job__detail",
                    pin: ".job__detail-sidebar",
                    pinSpacing: !1,
                    start: "top top",
                    end: "bottom center",
                    markers: !1,
                    delay: 1,
                },
            }));
})(jQuery),

    // (() => {
    //     let e = "unsplash.com/photo",
    //         t = [
    //             {
    //                 common: "Lion",
    //                 binomial: "Panthera leo",
    //                 photo: {
    //                     code: "1583499871880-de841d1ace2a",
    //                     page: "lion-lying-on-brown-rock-MUeeyzsjiY8",
    //                     text: "lion couple",
    //                     by: "Cl\xe9ment Roy",
    //                 },
    //             },
    //             {
    //                 common: "Tiger",
    //                 binomial: "Panthera tigris",
    //                 photo: {
    //                     code: "1500467525088-aafe28c0a95e",
    //                     page: "selective-focus-of-tiger",
    //                     text: "tiger",
    //                     by: "Frida Lannerstr\xf6m",
    //                 },
    //             },
    //             {
    //                 common: "Giant Panda",
    //                 binomial: "Ailuropoda melanoleuca",
    //                 photo: {
    //                     code: "1659540181281-1d89d6112832",
    //                     page: "a-panda-bear",
    //                     text: "panda",
    //                     by: "Jiachen Lin",
    //                 },
    //             },
    //         ],
    //         o = document.querySelector(".portfolio__area"),
    //         i = document.getElementById("galleryRing");
    //     if (!o || !i) return;
    //     (document.documentElement.style.setProperty("--n", t.length),
    //         t.forEach((o, r) => {
    //             let a = `https://images.${e}-${o.photo.code}?h=900`;
    //             i.insertAdjacentHTML(
    //                 "beforeend",
    //                 `
    //   <article class="gallery-card" style="--index:${r / t.length}">
    //     <div class="card-front">
    //       <h2 class="card-title">${o.common}</h2>
    //       <em class="card-subtitle">${o.binomial}</em>
    //     </div>
    //     <figure class="card-back">
    //       <img class="card-image" src="${a}" alt="${o.photo.text}">
    //       <figcaption class="card-caption">
    //         by <a class="card-link"
    //            href="https://${e}s/${o.photo.page}"
    //            target="_blank" rel="noopener">
    //            ${o.photo.by}
    //         </a>
    //       </figcaption>
    //     </figure>
    //   </article>
    // `,
    //             );
    //         }));
    //     let r = 0,
    //         a = 0;
    //     function n() {
    //         let e = o.getBoundingClientRect(),
    //             t = window.innerHeight,
    //             i = Math.min(1, Math.max(0, (t - e.top) / (t + e.height)));
    //         a = 1 * i;
    //     }
    //     function s() {
    //         ((r += (a - r) * 0.08),
    //             i.style.setProperty("--k", r.toFixed(4)),
    //             requestAnimationFrame(s));
    //     }
    //     (window.addEventListener("scroll", n, { passive: !0 }),
    //         window.addEventListener("resize", n),
    //         n(),
    //         s());
    // })(),
    // (function () {
    //     "use strict";
    //     let e = [
    //             {
    //                 common: "Interactive Solutions",
    //                 binomial: "Mahindra",
    //                 photo: {
    //                     imgUrl: "/img/case-study/1.webp",
    //                     text: "Mahindra",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "Interactive Solutions",
    //                 binomial: "Football Game",
    //                 photo: {
    //                     imgUrl: "/img/case-study/7.webm",
    //                     thumbnail: "/img/case-study/img/7.webp",
    //                     text: "Football Game",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "Digital Marketing",
    //                 binomial: "Spark Minda",
    //                 photo: {
    //                     imgUrl: "/img/case-study/2.webp",
    //                     text: "Spark Minda",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "Digital Marketing",
    //                 binomial: "Saraswati Classes",
    //                 photo: {
    //                     imgUrl: "/img/case-study/3.webp",
    //                     text: "Saraswati Classes",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "Interactive Solutions",
    //                 binomial: "Fully Faltoo NFT MTV 2022",
    //                 photo: {
    //                     imgUrl: "/img/case-study/10.webm",
    //                     thumbnail: "/img/case-study/img/10.webp",
    //                     text: "Fully Faltoo NFT MTV 2022",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "Interactive Solutions",
    //                 binomial: "Godrej Appliances",
    //                 photo: {
    //                     imgUrl: "/img/case-study/4.webp",
    //                     text: "Godrej Appliances",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "Interactive Solutions",
    //                 binomial: "Saaf Niyat Sahi Vikaas",
    //                 photo: {
    //                     imgUrl: "/img/case-study/18.webm",
    //                     thumbnail: "/img/case-study/img/18.webp",
    //                     text: "Saaf Niyat Sahi Vikaas",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "E-Commerce",
    //                 binomial: "Youth Secrets",
    //                 photo: {
    //                     imgUrl: "/img/case-study/5.webp",
    //                     text: "Youth Secrets",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "Interactive Solutions",
    //                 binomial: "Volkswagen Brand Conference",
    //                 photo: {
    //                     imgUrl: "/img/case-study/35.webm",
    //                     thumbnail: "/img/case-study/img/35.webp",
    //                     text: "Volkswagen Brand Conference",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "Digital Marketing",
    //                 binomial: "Linkedin Emailers",
    //                 photo: {
    //                     imgUrl: "/img/case-study/6.webp",
    //                     text: "Linkedin Emailers",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "Interactive Solutions",
    //                 binomial: "Sanofi CPL",
    //                 photo: {
    //                     imgUrl: "/img/case-study/36.webm",
    //                     thumbnail: "/img/case-study/img/36.webp",
    //                     text: "Sanofi CPL",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "UI Design & Development",
    //                 binomial: "UI Design & Development",
    //                 photo: {
    //                     imgUrl: "/img/case-study/7.webp",
    //                     text: "UI Design & Development",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "Interactive Solutions",
    //                 binomial: "Ascenso",
    //                 photo: {
    //                     imgUrl: "/img/case-study/44.webm",
    //                     thumbnail: "/img/case-study/img/44.webp",
    //                     text: "Ascenso",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "APP Development",
    //                 binomial: "Health Concept",
    //                 photo: {
    //                     imgUrl: "/img/case-study/8.webp",
    //                     text: "Health Concept",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "UI Design & Development",
    //                 binomial: "Tiny Library 2023 - VolumeZero",
    //                 photo: {
    //                     imgUrl: "/img/case-study/9.webp",
    //                     text: "Tiny Library 2023 - VolumeZero",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "Digital Marketing",
    //                 binomial: "Swiggy Emailers",
    //                 photo: {
    //                     imgUrl: "/img/case-study/10.webp",
    //                     text: "Swiggy Emailers",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "E-Commerce",
    //                 binomial: "Kombooz India",
    //                 photo: {
    //                     imgUrl: "/img/case-study/11.webp",
    //                     text: "Kombooz India",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //             {
    //                 common: "APP Development",
    //                 binomial: "Wash N Dry",
    //                 photo: {
    //                     imgUrl: "/img/case-study/11.webp",
    //                     text: "Wash N Dry",
    //                     pos: "50%",
    //                     by: "ABC Designs",
    //                 },
    //             },
    //         ],
    //         t = "unsplash.com/photo",
    //         o = e.length,
    //         i = 0,
    //         r = 0,
    //         a = 0,
    //         n = !1,
    //         s = 0,
    //         l = 0,
    //         c = 0,
    //         d = 0,
    //         p = 0,
    //         u = 0,
    //         g = null,
    //         m,
    //         y,
    //         h,
    //         f,
    //         _,
    //         v,
    //         w,
    //         b = {
    //             dragSensitivity: 0.002,
    //             wheelSensitivity: 8e-4,
    //             friction: 0.92,
    //             snapDuration: 0.5,
    //             minVelocity: 1e-4,
    //             doubleClickRotation: 1 / o,
    //         };
    //     function x(e, t = !1) {
    //         if (!h) return;
    //         r = e;
    //         let a = ((e % 1) + 1) % 1;
    //         (h.style.setProperty("--k", a), h.style.setProperty("--dir", 0));
    //         let n = -((a + 0.5) * 360);
    //         (t && "undefined" != typeof gsap
    //             ? gsap.to(h, {
    //                   duration: b.snapDuration,
    //                   ease: "power2.out",
    //                   onUpdate() {
    //                       h.style.transform = `translateZ(var(--z)) rotateY(${n}deg)`;
    //                   },
    //               })
    //             : (h.style.transform = `translateZ(var(--z)) rotateY(${n}deg)`),
    //             (function e() {
    //                 let t = ((r % 1) + 1) % 1;
    //                 ((i = Math.round(t * o) % o), v && (v.textContent = i + 1));
    //             })());
    //     }
    //     function E(e, t = !0) {
    //         let i = ((r % 1) + 1) % 1,
    //             n = e / o - i;
    //         (n > 0.5 && (n -= 1),
    //             n < -0.5 && (n += 1),
    //             (a = r + n),
    //             t && "undefined" != typeof gsap
    //                 ? gsap.to(
    //                       { k: r },
    //                       {
    //                           k: a,
    //                           duration: b.snapDuration,
    //                           ease: "power2.out",
    //                           onUpdate: function () {
    //                               x(this.targets()[0].k);
    //                           },
    //                       },
    //                   )
    //                 : x(a));
    //     }
    //     function k() {
    //         let e = (i + 1) % o;
    //         E(e);
    //     }
    //     function L() {
    //         let e = (i - 1 + o) % o;
    //         E(e);
    //     }
    //     function S() {
    //         if (Math.abs(d) < b.minVelocity) {
    //             ((d = 0), (g = null));
    //             return;
    //         }
    //         ((r += d), (d *= b.friction), x(r), (g = requestAnimationFrame(S)));
    //     }
    //     function A() {
    //         (g && (cancelAnimationFrame(g), (g = null)), (d = 0));
    //     }
    //     function T(e) {
    //         (A(), (n = !0));
    //         let t = e.touches ? e.touches[0] : e;
    //         ((s = t.clientX),
    //             (l = t.clientY),
    //             (p = s),
    //             (u = Date.now()),
    //             (c = r),
    //             (y.style.cursor = "grabbing"));
    //     }
    //     function C(e) {
    //         if (!n) return;
    //         let t = e.touches ? e.touches[0] : e,
    //             o = t.clientX,
    //             i = (o - s) * b.dragSensitivity,
    //             r = Date.now(),
    //             a = r - u;
    //         (a > 0 && (d = (((o - p) * b.dragSensitivity) / a) * 16),
    //             (p = o),
    //             (u = r));
    //         let l = c + i;
    //         x(l);
    //     }
    //     function q(e) {
    //         n &&
    //             ((n = !1),
    //             (y.style.cursor = "grab"),
    //             Math.abs(d) > b.minVelocity &&
    //                 (g && cancelAnimationFrame(g),
    //                 (g = requestAnimationFrame(S))));
    //     }
    //     function P(e) {
    //         let t = Math.abs(e.deltaX) > Math.abs(e.deltaY),
    //             o = e.shiftKey && Math.abs(e.deltaY) > 0;
    //         if (t || o) {
    //             (e.preventDefault(), A());
    //             let i = (t ? e.deltaX : e.deltaY) * b.wheelSensitivity;
    //             x((r += i));
    //         }
    //     }
    //     function B(e) {
    //         A();
    //         let t = y.getBoundingClientRect(),
    //             o = t.left + t.width / 2,
    //             i = e.clientX > o ? 1 : -1;
    //         i > 0 ? k() : L();
    //     }
    //     function D(e) {
    //         let t = m.getBoundingClientRect(),
    //             o = t.top < window.innerHeight && t.bottom > 0;
    //         if (o)
    //             switch (e.key) {
    //                 case "ArrowLeft":
    //                 case "ArrowUp":
    //                     (e.preventDefault(), L());
    //                     break;
    //                 case "ArrowRight":
    //                 case "ArrowDown":
    //                     (e.preventDefault(), k());
    //             }
    //     }
    //     function V() {
    //         let i = (function i() {
    //             if (!(h = document.getElementById("galleryAssembly")))
    //                 return (
    //                     console.error("Gallery assembly element not found"),
    //                     !1
    //                 );
    //             h.style.setProperty("--n", o);
    //             let r = "";
    //             return (
    //                 e.forEach((e, o) => {
    //                     let i = e.photo,
    //                         a = i.pos || "50%",
    //                         n =
    //                             i.imgUrl ||
    //                             `https://images.${t}-${i.code}?h=900`,
    //                         s =
    //                             i.link ||
    //                             (i.page ? `https://${t}s/${i.page}` : "#"),
    //                         l = (function e(t) {
    //                             if (!t) return !1;
    //                             let o = t.toLowerCase();
    //                             return [
    //                                 ".webm",
    //                                 ".webm",
    //                                 ".ogg",
    //                                 ".mov",
    //                                 ".avi",
    //                                 ".mkv",
    //                             ].some((e) => o.endsWith(e));
    //                         })(n),
    //                         c = i.thumbnail || "",
    //                         d = l && c,
    //                         p;
    //                     r += `
    //             <article 
    //                 class="circular-gallery-article ${l ? "is-video-article" : "is-image-article"}" 
    //                 data-index="${o}" 
    //                 data-type="${l ? "video" : "image"}"
    //                 data-has-thumbnail="${d ? "true" : "false"}"
    //                 style="--i: ${o}; --url: url(${c || n}); --pos: ${a}"
    //             >
    //                 <header class="circular-gallery-article-header">
    //                     <h2 class="circular-gallery-article-title">${e.common}</h2>
    //                     <em class="circular-gallery-article-binomial">${e.binomial}</em>
    //                 </header>
    //                 <figure class="circular-gallery-figure">
    //                     ${(p = l
    //                         ? `
    //                 <div class="circular-gallery-media-wrapper ${d ? "has-thumbnail" : "no-thumbnail"}">
    //                     <!-- Video element (behind thumbnail) -->
    //                     <video 
    //                         class="circular-gallery-video circular-gallery-media" 
    //                         src="${n}" 
    //                         loop 
    //                         muted 
    //                         playsinline
    //                         preload="metadata"
    //                         draggable="false"
    //                     ></video>
                        
    //                     ${
    //                         d
    //                             ? `
    //                         <!-- Thumbnail overlay -->
    //                         <div class="circular-gallery-thumbnail-overlay">
    //                             <img 
    //                                 class="circular-gallery-thumbnail" 
    //                                 src="${c}" 
    //                                 alt="${i.text}" 
    //                                 loading="lazy" 
    //                                 draggable="false"
    //                             >
    //                             <!-- Play indicator on thumbnail -->
    //                             <div class="circular-gallery-play-indicator">
    //                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
    //                                     <path d="M8 5v14l11-7z"/>
    //                                 </svg>
    //                             </div>
    //                         </div>
    //                     `
    //                             : `
    //                         <!-- Placeholder for videos without thumbnail -->
    //                         <div class="circular-gallery-video-placeholder">
    //                             <div class="circular-gallery-play-indicator">
    //                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
    //                                     <path d="M8 5v14l11-7z"/>
    //                                 </svg>
    //                             </div>
    //                         </div>
    //                     `
    //                     }
    //                 </div>
    //             `
    //                         : `
    //                 <div class="circular-gallery-media-wrapper is-image">
    //                     <img 
    //                         class="circular-gallery-image circular-gallery-media" 
    //                         src="${n}" 
    //                         alt="${i.text}" 
    //                         loading="lazy" 
    //                         draggable="false"
    //                     >
    //                 </div>
    //             `)}
    //                     <figcaption class="circular-gallery-figcaption">by 
    //                         <a href="${s}" target="_blank" rel="noopener noreferrer">${i.by}</a>
    //                     </figcaption>
    //                 </figure>
    //             </article>
    //         `;
    //                 }),
    //                 (h.innerHTML = r),
    //                 (function e() {
    //                     let t = h.querySelectorAll(
    //                         '.circular-gallery-article[data-type="video"]',
    //                     );
    //                     t.forEach((e) => {
    //                         let t = e.querySelector(".circular-gallery-video"),
    //                             o = e.querySelector(
    //                                 ".circular-gallery-thumbnail-overlay",
    //                             ),
    //                             i = e.querySelector(
    //                                 ".circular-gallery-video-placeholder",
    //                             );
    //                         t &&
    //                             (e.addEventListener("mouseenter", () => {
    //                                 (o && o.classList.add("hidden"),
    //                                     i && i.classList.add("hidden"),
    //                                     t.play().catch((e) => {
    //                                         console.log(
    //                                             "Video play failed:",
    //                                             e,
    //                                         );
    //                                     }));
    //                             }),
    //                             e.addEventListener("mouseleave", () => {
    //                                 (o && o.classList.remove("hidden"),
    //                                     i && i.classList.remove("hidden"),
    //                                     t.pause(),
    //                                     (t.currentTime = 0));
    //                             }),
    //                             e.addEventListener(
    //                                 "touchstart",
    //                                 () => {
    //                                     (o && o.classList.add("hidden"),
    //                                         i && i.classList.add("hidden"),
    //                                         t.play().catch((e) => {
    //                                             console.log(
    //                                                 "Video play failed:",
    //                                                 e,
    //                                             );
    //                                         }));
    //                                 },
    //                                 { passive: !0 },
    //                             ));
    //                     });
    //                 })(),
    //                 !0
    //             );
    //         })();
    //         i &&
    //             ((function e() {
    //                 if (
    //                     ((y = document.getElementById("galleryScene")),
    //                     (m = document.getElementById("circularGallerySection")),
    //                     (f = document.getElementById("galleryPrev")),
    //                     (_ = document.getElementById("galleryNext")),
    //                     (v = document.getElementById("currentIndex")),
    //                     (w = document.getElementById("totalCount")),
    //                     !y)
    //                 )
    //                     return;
    //                 (w && (w.textContent = o),
    //                     y.addEventListener("mousedown", T),
    //                     document.addEventListener("mousemove", C),
    //                     document.addEventListener("mouseup", q),
    //                     y.addEventListener("touchstart", T, { passive: !0 }),
    //                     document.addEventListener("touchmove", C, {
    //                         passive: !0,
    //                     }),
    //                     document.addEventListener("touchend", q),
    //                     y.addEventListener("wheel", P, { passive: !1 }),
    //                     y.addEventListener("dblclick", B),
    //                     document.addEventListener("keydown", D),
    //                     f && f.addEventListener("click", L),
    //                     _ && _.addEventListener("click", k));
    //                 let t;
    //                 (window.addEventListener("resize", () => {
    //                     (clearTimeout(t),
    //                         (t = setTimeout(() => {
    //                             (h.style.setProperty("--dir", 0), x(r));
    //                         }, 100)));
    //                 }),
    //                     y.addEventListener("contextmenu", (e) => {
    //                         n && e.preventDefault();
    //                     }));
    //             })(),
    //             x(0),
    //             h.offsetHeight,
    //             "undefined" != typeof gsap &&
    //                 requestAnimationFrame(() => {
    //                     gsap.from(h, {
    //                         duration: 1,
    //                         scale: 0.8,
    //                         opacity: 0,
    //                         ease: "power2.out",
    //                     });
    //                 }));
    //     }
    //     ("loading" === document.readyState
    //         ? document.addEventListener("DOMContentLoaded", V)
    //         : V(),
    //         (window.CircularGallery = {
    //             next: k,
    //             prev: L,
    //             goTo: E,
    //             getCurrentIndex: () => i,
    //             getData: () => e,
    //             refresh: () => x(r),
    //         }));
    // })(),
    

    


    document.addEventListener("DOMContentLoaded", function () {
        function e() {
            return window.innerWidth > 991;
        }
        let t = document.querySelector(".blog-sticky-left .sticky-wrapper"),
            o = document.querySelector(".blog-sticky-right .sticky-wrapper"),
            i = document.querySelector(".blog-layout");
        if (!t || !i) return;
        let r, a;
        function n() {
            if (!e()) {
                (t &&
                    ((t.style.position = ""),
                    (t.style.top = ""),
                    (t.style.width = "")),
                    o &&
                        ((o.style.position = ""),
                        (o.style.top = ""),
                        (o.style.width = "")));
                return;
            }
            ((r = t.parentElement.offsetWidth),
                o && (a = o.parentElement.offsetWidth));
        }
        function s() {
            if (!e()) return;
            let n = i.getBoundingClientRect(),
                s = n.top,
                l = n.bottom;
            if (t) {
                let c = t.offsetHeight;
                (t.parentElement.getBoundingClientRect(),
                    s <= 120 && l > c + 120
                        ? ((t.style.position = "fixed"),
                          (t.style.top = "120px"),
                          (t.style.width = r + "px"))
                        : l <= c + 120
                          ? ((t.style.position = "absolute"),
                            (t.style.top = i.offsetHeight - c + "px"),
                            (t.style.width = r + "px"))
                          : ((t.style.position = "relative"),
                            (t.style.top = "0"),
                            (t.style.width = "100%")));
            }
            if (o) {
                let d = o.offsetHeight;
                s <= 120 && l > d + 120
                    ? ((o.style.position = "fixed"),
                      (o.style.top = "120px"),
                      (o.style.width = a + "px"))
                    : l <= d + 120
                      ? ((o.style.position = "absolute"),
                        (o.style.top = i.offsetHeight - d + "px"),
                        (o.style.width = a + "px"))
                      : ((o.style.position = "relative"),
                        (o.style.top = "0"),
                        (o.style.width = "100%"));
            }
        }
        if (
            (n(),
            window.addEventListener("scroll", s, { passive: !0 }),
            window.addEventListener("resize", function () {
                (n(), s());
            }),
            document.querySelector("#smooth-content"))
        ) {
            let l = new MutationObserver(s);
            l.observe(document.querySelector("#smooth-content"), {
                attributes: !0,
                attributeFilter: ["style"],
            });
        }
        s();
    }),
    (function () {
        "use strict";
        let e = {
                autoplay: !0,
                autoplayDelay: 5e3,
                slidesToShow: { mobile: 1, tablet: 2, desktop: 3 },
                breakpoints: { tablet: 768, desktop: 1024 },
            },
            t = 0,
            o = 1,
            i = 0,
            r = 0,
            a = !1,
            n = 0,
            s = 0,
            l = 0,
            c = null,
            d = null,
            p = 0,
            u,
            g,
            m,
            y,
            h,
            f = [];
        function _() {
            let t;
            ((u = document.getElementById("testimonialTrack")),
                (g = document.getElementById("testimonialDots")),
                (m = document.getElementById("testimonialPrev")),
                (y = document.getElementById("testimonialNext")),
                (h = document.getElementById("testimonialProgress")),
                u &&
                    ((i = (f = Array.from(
                        u.querySelectorAll(".testimonial-card"),
                    )).length),
                    v(),
                    w(),
                    m &&
                        m.addEventListener("click", () => {
                            (E(), q());
                        }),
                    y &&
                        y.addEventListener("click", () => {
                            (x(), q());
                        }),
                    u.addEventListener("mousedown", k),
                    document.addEventListener("mousemove", L),
                    document.addEventListener("mouseup", S),
                    u.addEventListener("mouseleave", () => {
                        a && S();
                    }),
                    u.addEventListener("touchstart", k, { passive: !0 }),
                    document.addEventListener("touchmove", L, { passive: !0 }),
                    document.addEventListener("touchend", S),
                    u.addEventListener("contextmenu", (e) => {
                        a && e.preventDefault();
                    }),
                    u.addEventListener("mouseenter", C),
                    u.addEventListener("mouseleave", () => {
                        a || T();
                    }),
                    document.addEventListener("keydown", (e) => {
                        let t = document.getElementById("testimonialSection");
                        if (!t) return;
                        let o = t.getBoundingClientRect(),
                            i = o.top < window.innerHeight && o.bottom > 0;
                        i &&
                            ("ArrowLeft" === e.key
                                ? (E(), q())
                                : "ArrowRight" === e.key && (x(), q()));
                    }),
                    window.addEventListener("resize", () => {
                        (clearTimeout(t), (t = setTimeout(v, 100)));
                    }),
                    document.addEventListener("visibilitychange", () => {
                        document.hidden ? C() : T();
                    }),
                    e.autoplay && T(),
                    b(0, !1)));
        }
        function v() {
            let a = window.innerWidth;
            ((r = Math.ceil(
                i -
                    (o =
                        a >= e.breakpoints.desktop
                            ? e.slidesToShow.desktop
                            : a >= e.breakpoints.tablet
                              ? e.slidesToShow.tablet
                              : e.slidesToShow.mobile) +
                    1,
            )) < 1 && (r = 1),
                w(),
                t > r - 1 && (t = r - 1),
                b(t, !1));
        }
        function w() {
            if (g) {
                g.innerHTML = "";
                for (let e = 0; e < r; e++) {
                    let o = document.createElement("button");
                    (o.classList.add("testimonial-dot"),
                        o.setAttribute("aria-label", `Go to slide ${e + 1}`),
                        e === t && o.classList.add("active"),
                        o.addEventListener("click", () => {
                            (b(e), q());
                        }),
                        g.appendChild(o));
                }
            }
        }
        function b(e, o = !0) {
            (e < 0 && (e = 0), e > r - 1 && (e = r - 1), (t = e));
            let i = f[0].offsetWidth;
            ((l = s = -t * i),
                o
                    ? (u.style.transition =
                          "transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)")
                    : (u.style.transition = "none"),
                (u.style.transform = `translateX(${s}px)`),
                (function e() {
                    let o = g.querySelectorAll(".testimonial-dot");
                    o.forEach((e, o) => {
                        e.classList.toggle("active", o === t);
                    });
                })(),
                m && (m.disabled = 0 === t),
                y && (y.disabled = t >= r - 1));
        }
        function x() {
            t < r - 1 ? b(t + 1) : b(0);
        }
        function E() {
            t > 0 ? b(t - 1) : b(r - 1);
        }
        function k(e) {
            ((a = !0), (n = A(e)), u.classList.add("dragging"), C());
        }
        function L(e) {
            if (!a) return;
            let t = A(e),
                o = t - n;
            ((s = l + o), (u.style.transform = `translateX(${s}px)`));
        }
        function S() {
            if (!a) return;
            ((a = !1), u.classList.remove("dragging"));
            let e = s - l,
                o = f[0].offsetWidth,
                i = o / 4;
            (e < -i ? x() : e > i ? E() : b(t), T());
        }
        function A(e) {
            return e.type.includes("mouse") ? e.pageX : e.touches[0].clientX;
        }
        function T() {
            e.autoplay &&
                (C(),
                (p = 0),
                P(),
                (d = setInterval(() => {
                    ((p += 100 / (e.autoplayDelay / 100)), P());
                }, 100)),
                (c = setInterval(() => {
                    (x(), (p = 0));
                }, e.autoplayDelay)));
        }
        function C() {
            (c && (clearInterval(c), (c = null)),
                d && (clearInterval(d), (d = null)));
        }
        function q() {
            (C(), T());
        }
        function P() {
            h && (h.style.width = `${p}%`);
        }
        ("loading" === document.readyState
            ? document.addEventListener("DOMContentLoaded", _)
            : _(),
            (window.TestimonialSlider = {
                next: x,
                prev: E,
                goTo: b,
                getCurrentIndex: () => t,
                startAutoplay: T,
                stopAutoplay: C,
            }));
    })(),
    $(document).ready(function () {
        class e {
            constructor(e, t = {}) {
                ((this.$container = $(e)),
                    (this.$content = this.$container.find(".marquee-content")),
                    (this.options = $.extend(
                        {
                            speed: 50,
                            direction: "ltr",
                            pauseOnHover: !0,
                            pauseOnClick: !1,
                            gap: 30,
                            ease: "none",
                        },
                        t,
                    )),
                    (this.animation = null),
                    (this.isPaused = !1),
                    this.init());
            }
            init() {
                (this.cloneContent(),
                    this.createAnimation(),
                    this.setupEvents());
            }
            cloneContent() {
                let e = this.$content.clone(),
                    t = this.$content.clone();
                (this.$container.append(e).append(t),
                    (this.$allContent =
                        this.$container.find(".marquee-content")));
            }
            createAnimation() {
                let e = this.$content.outerWidth(!0),
                    t = e / this.options.speed;
                ("rtl" === this.options.direction
                    ? gsap.set(this.$container, { x: 0 })
                    : gsap.set(this.$container, { x: -e }),
                    (this.animation = gsap.to(this.$container, {
                        x: "rtl" === this.options.direction ? -e : 0,
                        duration: t,
                        ease: this.options.ease,
                        repeat: -1,
                        onRepeat: () => {
                            "rtl" === this.options.direction
                                ? gsap.set(this.$container, { x: 0 })
                                : gsap.set(this.$container, { x: -e });
                        },
                    })));
            }
            setupEvents() {
                let e = this,
                    t = $("#pauseIndicator");
                (this.options.pauseOnHover &&
                    (this.$container.parent().on("mouseenter", function () {
                        (e.pause(), t.addClass("show"));
                    }),
                    this.$container.parent().on("mouseleave", function () {
                        (e.resume(), t.removeClass("show"));
                    })),
                    this.options.pauseOnClick &&
                        this.$container.on("click", function () {
                            e.toggle();
                        }));
            }
            pause() {
                this.animation &&
                    !this.isPaused &&
                    (gsap.to(this.animation, {
                        timeScale: 0,
                        duration: 0.5,
                        ease: "power2.out",
                    }),
                    (this.isPaused = !0));
            }
            resume() {
                this.animation &&
                    this.isPaused &&
                    (gsap.to(this.animation, {
                        timeScale: 1,
                        duration: 0.5,
                        ease: "power2.in",
                    }),
                    (this.isPaused = !1));
            }
            toggle() {
                this.isPaused ? this.resume() : this.pause();
            }
            destroy() {
                (this.animation && this.animation.kill(),
                    this.$container.parent().off("mouseenter mouseleave"),
                    this.$container.off("click"));
            }
        }
        (($.fn.gsapMarquee = function (t) {
            return this.each(function () {
                $.data(this, "gsapMarquee") ||
                    $.data(this, "gsapMarquee", new e(this, t));
            });
        }),
            $("#marquee-ltr").gsapMarquee({
                speed: 80,
                direction: "ltr",
                pauseOnHover: !0,
            }),
            $("#marquee-rtl").gsapMarquee({
                speed: 60,
                direction: "rtl",
                pauseOnHover: !0,
            }),
            $("#marquee-rtll").gsapMarquee({
                speed: 60,
                direction: "rtl",
                pauseOnHover: !0,
            }));
    }),
    gsap.to("#bounceImage", {
        y: -18,
        duration: 1.5,
        ease: "power1.inOut",
        repeat: -1,
        yoyo: !0,
    }),
    gsap.utils.toArray(".fade-left").forEach((e) => {
        gsap.from(e, {
            scrollTrigger: { trigger: e, start: "top 90%" },
            y: 50,
            opacity: 0,
            duration: 1.4,
            ease: "sine.out",
        });
    }),
    (function () {
        "use strict";
        let e = {
                autoplay: !0,
                autoplayDelay: 2e3,
                slidesToShow: { mobile: 1, tablet: 2, desktop: 3 },
                breakpoints: { tablet: 768, desktop: 1024 },
            },
            t = 0,
            o = 1,
            i = 0,
            r = 0,
            a = !1,
            n = 0,
            s = 0,
            l = 0,
            c = null,
            d = null,
            p = 0,
            u,
            g,
            m,
            y,
            h,
            f = [];
        function _() {
            let t;
            ((u = document.getElementById("processTrack")),
                (g = document.getElementById("processDots")),
                (m = document.getElementById("processPrev")),
                (y = document.getElementById("processNext")),
                (h = document.getElementById("processProgress")),
                u &&
                    ((i = (f = Array.from(u.querySelectorAll(".process-card")))
                        .length),
                    v(),
                    w(),
                    m &&
                        m.addEventListener("click", () => {
                            (E(), q());
                        }),
                    y &&
                        y.addEventListener("click", () => {
                            (x(), q());
                        }),
                    u.addEventListener("mousedown", k),
                    document.addEventListener("mousemove", L),
                    document.addEventListener("mouseup", S),
                    u.addEventListener("mouseleave", () => {
                        a && S();
                    }),
                    u.addEventListener("touchstart", k, { passive: !0 }),
                    document.addEventListener("touchmove", L, { passive: !0 }),
                    document.addEventListener("touchend", S),
                    u.addEventListener("contextmenu", (e) => {
                        a && e.preventDefault();
                    }),
                    u.addEventListener("mouseenter", C),
                    u.addEventListener("mouseleave", () => {
                        a || T();
                    }),
                    document.addEventListener("keydown", (e) => {
                        let t = document.getElementById("processSection");
                        if (!t) return;
                        let o = t.getBoundingClientRect(),
                            i = o.top < window.innerHeight && o.bottom > 0;
                        i &&
                            ("ArrowLeft" === e.key
                                ? (E(), q())
                                : "ArrowRight" === e.key && (x(), q()));
                    }),
                    window.addEventListener("resize", () => {
                        (clearTimeout(t), (t = setTimeout(v, 100)));
                    }),
                    document.addEventListener("visibilitychange", () => {
                        document.hidden ? C() : T();
                    }),
                    e.autoplay && T(),
                    b(0, !1)));
        }
        function v() {
            let a = window.innerWidth;
            ((r = Math.ceil(
                i -
                    (o =
                        a >= e.breakpoints.desktop
                            ? e.slidesToShow.desktop
                            : a >= e.breakpoints.tablet
                              ? e.slidesToShow.tablet
                              : e.slidesToShow.mobile) +
                    1,
            )) < 1 && (r = 1),
                w(),
                t > r - 1 && (t = r - 1),
                b(t, !1));
        }
        function w() {
            if (g) {
                g.innerHTML = "";
                for (let e = 0; e < r; e++) {
                    let o = document.createElement("button");
                    (o.classList.add("process-dot"),
                        o.setAttribute("aria-label", `Go to slide ${e + 1}`),
                        e === t && o.classList.add("active"),
                        o.addEventListener("click", () => {
                            (b(e), q());
                        }),
                        g.appendChild(o));
                }
            }
        }
        function b(e, o = !0) {
            (e < 0 && (e = 0), e > r - 1 && (e = r - 1), (t = e));
            let i = f[0].offsetWidth;
            ((l = s = -t * i),
                o
                    ? (u.style.transition =
                          "transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)")
                    : (u.style.transition = "none"),
                (u.style.transform = `translateX(${s}px)`),
                (function e() {
                    let o = g.querySelectorAll(".process-dot");
                    o.forEach((e, o) => {
                        e.classList.toggle("active", o === t);
                    });
                })(),
                m && (m.disabled = 0 === t),
                y && (y.disabled = t >= r - 1));
        }
        function x() {
            t < r - 1 ? b(t + 1) : b(0);
        }
        function E() {
            t > 0 ? b(t - 1) : b(r - 1);
        }
        function k(e) {
            ((a = !0), (n = A(e)), u.classList.add("dragging"), C());
        }
        function L(e) {
            if (!a) return;
            let t = A(e),
                o = t - n;
            ((s = l + o), (u.style.transform = `translateX(${s}px)`));
        }
        function S() {
            if (!a) return;
            ((a = !1), u.classList.remove("dragging"));
            let e = s - l,
                o = f[0].offsetWidth,
                i = o / 4;
            (e < -i ? x() : e > i ? E() : b(t), T());
        }
        function A(e) {
            return e.type.includes("mouse") ? e.pageX : e.touches[0].clientX;
        }
        function T() {
            e.autoplay &&
                (C(),
                (p = 0),
                P(),
                (d = setInterval(() => {
                    ((p += 100 / (e.autoplayDelay / 100)), P());
                }, 100)),
                (c = setInterval(() => {
                    (x(), (p = 0));
                }, e.autoplayDelay)));
        }
        function C() {
            (c && (clearInterval(c), (c = null)),
                d && (clearInterval(d), (d = null)));
        }
        function q() {
            (C(), T());
        }
        function P() {
            h && (h.style.width = `${p}%`);
        }
        ("loading" === document.readyState
            ? document.addEventListener("DOMContentLoaded", _)
            : _(),
            (window.ProcessSlider = {
                next: x,
                prev: E,
                goTo: b,
                getCurrentIndex: () => t,
                startAutoplay: T,
                stopAutoplay: C,
            }));
    })(),
    document.addEventListener("DOMContentLoaded", function () {
        new TypeIt("#typing-typeit", {
            speed: 125,
            deleteSpeed: 100,
            breakLines: !1,
            loop: !0,
        })
            .type("Website Design & Development")
            .pause(1500)
            .delete(null, { delay: 300 })
            .type("SEO")
            .pause(1500)
            .delete(null, { delay: 300 })
            .type("Google Ads")
            .pause(1500)
            .delete(null, { delay: 300 })
            .type("Social Media Marketing")
            .pause(1500)
            .delete(null, { delay: 300 })
            .type("Branding")
            .pause(1500)
            .delete(null, { delay: 300 })
            .go();
    }),
    document.addEventListener("DOMContentLoaded", function () {
        let e = document.getElementById("stickyColumn"),
            t = document.querySelector(".service__list-wrapper");
        if (!e || !t) return;
        let o = { topOffset: 100, breakpoint: 1200 };
        function i() {
            if (window.innerWidth < o.breakpoint) {
                ((e.style.position = "relative"), (e.style.top = "0"));
                return;
            }
            let i = t.getBoundingClientRect();
            (e.offsetHeight,
                i.bottom,
                o.topOffset,
                (e.style.position = "sticky"),
                (e.style.top = o.topOffset + "px"),
                (e.style.bottom = "auto"));
        }
        let r = !1;
        (window.addEventListener("scroll", function () {
            r ||
                (window.requestAnimationFrame(function () {
                    (i(), (r = !1));
                }),
                (r = !0));
        }),
            window.addEventListener("resize", i),
            i());
    }));


    (function () {
    "use strict";
    let e = [
            {
                common: "Interactive Solutions",
                binomial: "Mahindra",
                photo: {
                    imgUrl: "/img/case-study/1.webp",
                    text: "Mahindra",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "Interactive Solutions",
                binomial: "Football Game",
                photo: {
                    imgUrl: "/img/case-study/7.webm",
                    thumbnail: "/img/case-study/img/7.webp",
                    text: "Football Game",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "Digital Marketing",
                binomial: "Spark Minda",
                photo: {
                    imgUrl: "/img/case-study/2.webp",
                    text: "Spark Minda",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "Digital Marketing",
                binomial: "Saraswati Classes",
                photo: {
                    imgUrl: "/img/case-study/3.webp",
                    text: "Saraswati Classes",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "Interactive Solutions",
                binomial: "Fully Faltoo NFT MTV 2022",
                photo: {
                    imgUrl: "/img/case-study/10.webm",
                    thumbnail: "/img/case-study/img/10.webp",
                    text: "Fully Faltoo NFT MTV 2022",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "Interactive Solutions",
                binomial: "Godrej Appliances",
                photo: {
                    imgUrl: "/img/case-study/4.webp",
                    text: "Godrej Appliances",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "Interactive Solutions",
                binomial: "Saaf Niyat Sahi Vikaas",
                photo: {
                    imgUrl: "/img/case-study/18.webm",
                    thumbnail: "/img/case-study/img/18.webp",
                    text: "Saaf Niyat Sahi Vikaas",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "E-Commerce",
                binomial: "Youth Secrets",
                photo: {
                    imgUrl: "/img/case-study/5.webp",
                    text: "Youth Secrets",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "Interactive Solutions",
                binomial: "Volkswagen Brand Conference",
                photo: {
                    imgUrl: "/img/case-study/35.webm",
                    thumbnail: "/img/case-study/img/35.webp",
                    text: "Volkswagen Brand Conference",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "Digital Marketing",
                binomial: "Linkedin Emailers",
                photo: {
                    imgUrl: "/img/case-study/6.webp",
                    text: "Linkedin Emailers",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "Interactive Solutions",
                binomial: "Sanofi CPL",
                photo: {
                    imgUrl: "/img/case-study/36.webm",
                    thumbnail: "/img/case-study/img/36.webp",
                    text: "Sanofi CPL",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "UI Design & Development",
                binomial: "UI Design & Development",
                photo: {
                    imgUrl: "/img/case-study/7.webp",
                    text: "UI Design & Development",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "Interactive Solutions",
                binomial: "Ascenso",
                photo: {
                    imgUrl: "/img/case-study/44.webm",
                    thumbnail: "/img/case-study/img/44.webp",
                    text: "Ascenso",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "APP Development",
                binomial: "Health Concept",
                photo: {
                    imgUrl: "/img/case-study/8.webp",
                    text: "Health Concept",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "UI Design & Development",
                binomial: "Tiny Library 2023 - VolumeZero",
                photo: {
                    imgUrl: "/img/case-study/9.webp",
                    text: "Tiny Library 2023 - VolumeZero",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "Digital Marketing",
                binomial: "Swiggy Emailers",
                photo: {
                    imgUrl: "/img/case-study/10.webp",
                    text: "Swiggy Emailers",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "E-Commerce",
                binomial: "Kombooz India",
                photo: {
                    imgUrl: "/img/case-study/11.webp",
                    text: "Kombooz India",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
            {
                common: "APP Development",
                binomial: "Wash N Dry",
                photo: {
                    imgUrl: "/img/case-study/11.webp",
                    text: "Wash N Dry",
                    pos: "50%",
                    by: "ABC Designs",
                },
            },
        ],
        t = "unsplash.com/photo",
        o = e.length,
        i = 0,
        r = 0,
        a = 0,
        n = !1,
        s = 0,
        l = 0,
        c = 0,
        d = 0,
        p = 0,
        u = 0,
        g = null,
        m,
        y,
        h,
        f,
        _,
        v,
        w,
        // ========== AUTOPLAY VARIABLES ==========
        autoplayInterval = null,
        autoplayAnimationFrame = null,
        autoplayDelay = 3000,
        autoplaySpeed = 0.00005, // Speed for smooth mode (rotation per ms)
        autoplayEnabled = false,
        autoplayPaused = false,
        autoplaySmoothMode = false,
        autoplayResumeTimeout = null,
        autoplayDirection = 1,
        lastAutoplayTime = 0,
        // ========================================
        b = {
            dragSensitivity: 0.002,
            wheelSensitivity: 8e-4,
            friction: 0.92,
            snapDuration: 0.5,
            minVelocity: 1e-4,
            doubleClickRotation: 1 / o,
            // ========== AUTOPLAY CONFIG ==========
            autoplayDelay: 3000,
            autoplaySpeed: 0.00005, // Default smooth speed
            autoplayPauseOnHover: true,
            autoplayPauseOnInteraction: true,
            autoplayResumeDelay: 1000,
            smoothThreshold: 500, // If delay < this, use smooth mode
            // =====================================
        };

    // ========== AUTOPLAY FUNCTIONS ==========
    function clearAutoplayInterval() {
        if (autoplayInterval) {
            clearInterval(autoplayInterval);
            autoplayInterval = null;
        }
    }

    function cancelAutoplayAnimation() {
        if (autoplayAnimationFrame) {
            cancelAnimationFrame(autoplayAnimationFrame);
            autoplayAnimationFrame = null;
        }
    }

    function clearAutoplayResumeTimeout() {
        if (autoplayResumeTimeout) {
            clearTimeout(autoplayResumeTimeout);
            autoplayResumeTimeout = null;
        }
    }

    function stopAllAutoplay() {
        clearAutoplayInterval();
        cancelAutoplayAnimation();
        clearAutoplayResumeTimeout();
    }

    // ========== SMOOTH CONTINUOUS AUTOPLAY ==========
    function startSmoothAutoplay(speed, direction) {
        // Set speed if provided
        if (typeof speed === 'number' && speed > 0) {
            autoplaySpeed = speed;
            b.autoplaySpeed = speed;
        }

        // Set direction if provided
        if (direction === -1 || direction === 1) {
            autoplayDirection = direction;
        }

        autoplayEnabled = true;
        autoplayPaused = false;
        autoplaySmoothMode = true;

        stopAllAutoplay();

        lastAutoplayTime = performance.now();

        function animateSmoothAutoplay(currentTime) {
            if (!autoplayEnabled) {
                return;
            }

            if (!autoplayPaused) {
                const deltaTime = currentTime - lastAutoplayTime;
                
                // Calculate smooth rotation increment
                const increment = autoplaySpeed * deltaTime * autoplayDirection;
                r += increment;
                
                // Update the gallery rotation
                x(r);
                
                // Update current index display
                updateCurrentIndex();
            }

            lastAutoplayTime = currentTime;
            autoplayAnimationFrame = requestAnimationFrame(animateSmoothAutoplay);
        }

        autoplayAnimationFrame = requestAnimationFrame(animateSmoothAutoplay);
    }

    function updateCurrentIndex() {
        let normalizedR = ((r % 1) + 1) % 1;
        let newIndex = Math.round(normalizedR * o) % o;
        if (newIndex !== i) {
            i = newIndex;
            if (v) v.textContent = i + 1;
        }
    }

    // ========== STEP-BASED AUTOPLAY ==========
    function startStepAutoplay(delay, direction) {
        if (typeof delay === 'number' && delay > 0) {
            autoplayDelay = delay;
            b.autoplayDelay = delay;
        }

        if (direction === -1 || direction === 1) {
            autoplayDirection = direction;
        }

        autoplayEnabled = true;
        autoplayPaused = false;
        autoplaySmoothMode = false;

        stopAllAutoplay();

        autoplayInterval = setInterval(() => {
            if (!autoplayPaused && autoplayEnabled) {
                if (autoplayDirection === 1) {
                    k(); // next
                } else {
                    L(); // prev
                }
            }
        }, autoplayDelay);
    }

    // ========== SMART AUTOPLAY START ==========
    function startAutoplay(delayOrSpeed, direction) {
        // Determine mode based on value
        if (typeof delayOrSpeed === 'number') {
            if (delayOrSpeed < b.smoothThreshold) {
                // Use smooth mode for very fast autoplay
                // Convert delay to speed: smaller delay = faster speed
                let speed = delayOrSpeed <= 0 ? b.autoplaySpeed : (1 / o) / delayOrSpeed;
                startSmoothAutoplay(speed, direction);
            } else {
                // Use step mode for normal delays
                startStepAutoplay(delayOrSpeed, direction);
            }
        } else {
            // Default: use step mode with default delay
            startStepAutoplay(b.autoplayDelay, direction);
        }
    }

    function stopAutoplay() {
        autoplayEnabled = false;
        autoplayPaused = false;
        autoplaySmoothMode = false;
        stopAllAutoplay();
    }

    function pauseAutoplay() {
        if (autoplayEnabled) {
            autoplayPaused = true;
            clearAutoplayResumeTimeout();
        }
    }

    function resumeAutoplay() {
        if (autoplayEnabled) {
            autoplayPaused = false;
            lastAutoplayTime = performance.now(); // Reset time to prevent jump
        }
    }

    function scheduleAutoplayResume() {
        if (autoplayEnabled && b.autoplayPauseOnInteraction) {
            clearAutoplayResumeTimeout();
            autoplayResumeTimeout = setTimeout(() => {
                resumeAutoplay();
            }, b.autoplayResumeDelay);
        }
    }

    function setAutoplaySpeed(speed) {
        if (typeof speed === 'number' && speed > 0) {
            autoplaySpeed = speed;
            b.autoplaySpeed = speed;
        }
    }

    function setAutoplayDelay(delay) {
        if (typeof delay === 'number' && delay > 0) {
            autoplayDelay = delay;
            b.autoplayDelay = delay;
            if (autoplayEnabled && !autoplaySmoothMode) {
                startStepAutoplay(delay);
            }
        }
    }

    function setAutoplayDirection(direction) {
        if (direction === -1 || direction === 1) {
            autoplayDirection = direction;
        } else if (direction === 'forward' || direction === 'next') {
            autoplayDirection = 1;
        } else if (direction === 'backward' || direction === 'prev') {
            autoplayDirection = -1;
        }
    }

    function toggleAutoplay() {
        if (autoplayEnabled) {
            stopAutoplay();
        } else {
            startAutoplay();
        }
        return autoplayEnabled;
    }

    function isAutoplayEnabled() {
        return autoplayEnabled;
    }

    function isAutoplayPaused() {
        return autoplayPaused;
    }

    function isSmoothMode() {
        return autoplaySmoothMode;
    }
    // ========================================

    function x(e, t = !1) {
        if (!h) return;
        r = e;
        let a = ((e % 1) + 1) % 1;
        (h.style.setProperty("--k", a), h.style.setProperty("--dir", 0));
        let n = -((a + 0.5) * 360);
        (t && "undefined" != typeof gsap
            ? gsap.to(h, {
                  duration: b.snapDuration,
                  ease: "power2.out",
                  onUpdate() {
                      h.style.transform = `translateZ(var(--z)) rotateY(${n}deg)`;
                  },
              })
            : (h.style.transform = `translateZ(var(--z)) rotateY(${n}deg)`),
            (function e() {
                let t = ((r % 1) + 1) % 1;
                ((i = Math.round(t * o) % o), v && (v.textContent = i + 1));
            })());
    }

    function E(e, t = !0) {
        let i = ((r % 1) + 1) % 1,
            n = e / o - i;
        (n > 0.5 && (n -= 1),
            n < -0.5 && (n += 1),
            (a = r + n),
            t && "undefined" != typeof gsap
                ? gsap.to(
                      { k: r },
                      {
                          k: a,
                          duration: b.snapDuration,
                          ease: "power2.out",
                          onUpdate: function () {
                              x(this.targets()[0].k);
                          },
                      },
                  )
                : x(a));
    }

    function k() {
        let e = (i + 1) % o;
        E(e);
    }

    function L() {
        let e = (i - 1 + o) % o;
        E(e);
    }

    function S() {
        if (Math.abs(d) < b.minVelocity) {
            ((d = 0), (g = null));
            scheduleAutoplayResume();
            return;
        }
        ((r += d), (d *= b.friction), x(r), (g = requestAnimationFrame(S)));
    }

    function A() {
        (g && (cancelAnimationFrame(g), (g = null)), (d = 0));
    }

    function T(e) {
        (A(), (n = !0));
        if (b.autoplayPauseOnInteraction) {
            pauseAutoplay();
        }
        let t = e.touches ? e.touches[0] : e;
        ((s = t.clientX),
            (l = t.clientY),
            (p = s),
            (u = Date.now()),
            (c = r),
            (y.style.cursor = "grabbing"));
    }

    function C(e) {
        if (!n) return;
        let t = e.touches ? e.touches[0] : e,
            o = t.clientX,
            i = (o - s) * b.dragSensitivity,
            r = Date.now(),
            a = r - u;
        (a > 0 && (d = (((o - p) * b.dragSensitivity) / a) * 16),
            (p = o),
            (u = r));
        let l = c + i;
        x(l);
    }

    function q(e) {
        n &&
            ((n = !1),
            (y.style.cursor = "grab"),
            Math.abs(d) > b.minVelocity
                ? (g && cancelAnimationFrame(g),
                  (g = requestAnimationFrame(S)))
                : scheduleAutoplayResume());
    }

    function P(e) {
        let t = Math.abs(e.deltaX) > Math.abs(e.deltaY),
            o = e.shiftKey && Math.abs(e.deltaY) > 0;
        if (t || o) {
            (e.preventDefault(), A());
            if (b.autoplayPauseOnInteraction) {
                pauseAutoplay();
            }
            let i = (t ? e.deltaX : e.deltaY) * b.wheelSensitivity;
            x((r += i));
            scheduleAutoplayResume();
        }
    }

    function B(e) {
        A();
        let t = y.getBoundingClientRect(),
            o = t.left + t.width / 2,
            i = e.clientX > o ? 1 : -1;
        i > 0 ? k() : L();
    }

    function D(e) {
        let t = m.getBoundingClientRect(),
            o = t.top < window.innerHeight && t.bottom > 0;
        if (o)
            switch (e.key) {
                case "ArrowLeft":
                case "ArrowUp":
                    (e.preventDefault(), L());
                    if (b.autoplayPauseOnInteraction) {
                        pauseAutoplay();
                        scheduleAutoplayResume();
                    }
                    break;
                case "ArrowRight":
                case "ArrowDown":
                    (e.preventDefault(), k());
                    if (b.autoplayPauseOnInteraction) {
                        pauseAutoplay();
                        scheduleAutoplayResume();
                    }
                    break;
            }
    }

    function V() {
        let i = (function i() {
            if (!(h = document.getElementById("galleryAssembly")))
                return (
                    console.error("Gallery assembly element not found"),
                    !1
                );
            h.style.setProperty("--n", o);
            let r = "";
            return (
                e.forEach((e, o) => {
                    let i = e.photo,
                        a = i.pos || "50%",
                        n =
                            i.imgUrl ||
                            `https://images.${t}-${i.code}?h=900`,
                        s =
                            i.link ||
                            (i.page ? `https://${t}s/${i.page}` : "#"),
                        l = (function e(t) {
                            if (!t) return !1;
                            let o = t.toLowerCase();
                            return [
                                ".webm",
                                ".webm",
                                ".ogg",
                                ".mov",
                                ".avi",
                                ".mkv",
                            ].some((e) => o.endsWith(e));
                        })(n),
                        c = i.thumbnail || "",
                        d = l && c,
                        p;
                    r += `
            <article 
                class="circular-gallery-article ${l ? "is-video-article" : "is-image-article"}" 
                data-index="${o}" 
                data-type="${l ? "video" : "image"}"
                data-has-thumbnail="${d ? "true" : "false"}"
                style="--i: ${o}; --url: url(${c || n}); --pos: ${a}"
            >
                <header class="circular-gallery-article-header">
                    <h2 class="circular-gallery-article-title">${e.common}</h2>
                    <em class="circular-gallery-article-binomial">${e.binomial}</em>
                </header>
                <figure class="circular-gallery-figure">
                    ${(p = l
                        ? `
                <div class="circular-gallery-media-wrapper ${d ? "has-thumbnail" : "no-thumbnail"}">
                    <video 
                        class="circular-gallery-video circular-gallery-media" 
                        src="${n}" 
                        loop 
                        muted 
                        playsinline
                        preload="metadata"
                        draggable="false"
                    ></video>
                    ${
                        d
                            ? `
                        <div class="circular-gallery-thumbnail-overlay">
                            <img 
                                class="circular-gallery-thumbnail" 
                                src="${c}" 
                                alt="${i.text}" 
                                loading="lazy" 
                                draggable="false"
                            >
                            <div class="circular-gallery-play-indicator">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                    `
                            : `
                        <div class="circular-gallery-video-placeholder">
                            <div class="circular-gallery-play-indicator">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                    `
                    }
                </div>
            `
                        : `
                <div class="circular-gallery-media-wrapper is-image">
                    <img 
                        class="circular-gallery-image circular-gallery-media" 
                        src="${n}" 
                        alt="${i.text}" 
                        loading="lazy" 
                        draggable="false"
                    >
                </div>
            `)}
                    <figcaption class="circular-gallery-figcaption">by 
                        <a href="${s}" target="_blank" rel="noopener noreferrer">${i.by}</a>
                    </figcaption>
                </figure>
            </article>
        `;
                }),
                (h.innerHTML = r),
                (function e() {
                    let t = h.querySelectorAll(
                        '.circular-gallery-article[data-type="video"]',
                    );
                    t.forEach((e) => {
                        let t = e.querySelector(".circular-gallery-video"),
                            o = e.querySelector(
                                ".circular-gallery-thumbnail-overlay",
                            ),
                            i = e.querySelector(
                                ".circular-gallery-video-placeholder",
                            );
                        t &&
                            (e.addEventListener("mouseenter", () => {
                                (o && o.classList.add("hidden"),
                                    i && i.classList.add("hidden"),
                                    t.play().catch((e) => {
                                        console.log("Video play failed:", e);
                                    }));
                            }),
                            e.addEventListener("mouseleave", () => {
                                (o && o.classList.remove("hidden"),
                                    i && i.classList.remove("hidden"),
                                    t.pause(),
                                    (t.currentTime = 0));
                            }),
                            e.addEventListener(
                                "touchstart",
                                () => {
                                    (o && o.classList.add("hidden"),
                                        i && i.classList.add("hidden"),
                                        t.play().catch((e) => {
                                            console.log("Video play failed:", e);
                                        }));
                                },
                                { passive: !0 },
                            ));
                    });
                })(),
                !0
            );
        })();
        i &&
            ((function e() {
                if (
                    ((y = document.getElementById("galleryScene")),
                    (m = document.getElementById("circularGallerySection")),
                    (f = document.getElementById("galleryPrev")),
                    (_ = document.getElementById("galleryNext")),
                    (v = document.getElementById("currentIndex")),
                    (w = document.getElementById("totalCount")),
                    !y)
                )
                    return;
                (w && (w.textContent = o),
                    y.addEventListener("mousedown", T),
                    document.addEventListener("mousemove", C),
                    document.addEventListener("mouseup", q),
                    y.addEventListener("touchstart", T, { passive: !0 }),
                    document.addEventListener("touchmove", C, { passive: !0 }),
                    document.addEventListener("touchend", q),
                    y.addEventListener("wheel", P, { passive: !1 }),
                    y.addEventListener("dblclick", B),
                    document.addEventListener("keydown", D),
                    f && f.addEventListener("click", () => {
                        L();
                        if (b.autoplayPauseOnInteraction) {
                            pauseAutoplay();
                            scheduleAutoplayResume();
                        }
                    }),
                    _ && _.addEventListener("click", () => {
                        k();
                        if (b.autoplayPauseOnInteraction) {
                            pauseAutoplay();
                            scheduleAutoplayResume();
                        }
                    }));

                if (b.autoplayPauseOnHover) {
                    y.addEventListener("mouseenter", () => {
                        pauseAutoplay();
                    });
                    y.addEventListener("mouseleave", () => {
                        if (autoplayEnabled) {
                            resumeAutoplay();
                        }
                    });
                }

                let t;
                (window.addEventListener("resize", () => {
                    (clearTimeout(t),
                        (t = setTimeout(() => {
                            (h.style.setProperty("--dir", 0), x(r));
                        }, 100)));
                }),
                    y.addEventListener("contextmenu", (e) => {
                        n && e.preventDefault();
                    }));
            })(),
            x(0),
            h.offsetHeight,
            "undefined" != typeof gsap &&
                requestAnimationFrame(() => {
                    gsap.from(h, {
                        duration: 1,
                        scale: 0.8,
                        opacity: 0,
                        ease: "power2.out",
                    });
                }));
    }
    
    ("loading" === document.readyState
        ? document.addEventListener("DOMContentLoaded", V)
        : V(),
        // ========== EXTENDED PUBLIC API ==========
        (window.CircularGallery = {
            next: k,
            prev: L,
            goTo: E,
            getCurrentIndex: () => i,
            getData: () => e,
            refresh: () => x(r),
            // Autoplay controls
            autoplay: {
                // Main controls
                start: startAutoplay,
                startSmooth: startSmoothAutoplay,
                startStep: startStepAutoplay,
                stop: stopAutoplay,
                pause: pauseAutoplay,
                resume: resumeAutoplay,
                toggle: toggleAutoplay,
                
                // Settings
                setSpeed: setAutoplaySpeed,
                setDelay: setAutoplayDelay,
                setDirection: setAutoplayDirection,
                
                // Status
                isEnabled: isAutoplayEnabled,
                isPaused: isAutoplayPaused,
                isSmoothMode: isSmoothMode,
                getSpeed: () => autoplaySpeed,
                getDelay: () => autoplayDelay,
                getDirection: () => autoplayDirection,
            },
            config: b,
        }));
})();

// Start smooth continuous rotation with default speed
CircularGallery.autoplay.startSmooth();

// Start with custom speed (higher = faster)
// CircularGallery.autoplay.startSmooth(0.00003);  // Slow
CircularGallery.autoplay.startSmooth(0.00008);  // Medium
// CircularGallery.autoplay.startSmooth(0.0002);   // Fast
// CircularGallery.autoplay.startSmooth(0.0005);   // Very fast