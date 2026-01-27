class PageLoader {
    constructor(s = {}) {
        ((this.loader = document.getElementById("page-loader")),
            (this.content = document.querySelector(".page-content")),
            (this.progressFill = document.querySelector(".progress-fill")),
            (this.options = {
                minDisplayTime: s.minDisplayTime || 1e3,
                fadeOutDuration: s.fadeOutDuration || 500,
                simulateProgress: s.simulateProgress || !0,
                onComplete: s.onComplete || null,
                ...s,
            }),
            (this.startTime = Date.now()),
            (this.progress = 0),
            this.init());
    }
    init() {
        ((document.body.style.overflow = "hidden"),
            this.options.simulateProgress &&
                this.progressFill &&
                this.simulateProgress(),
            "complete" === document.readyState
                ? this.onPageLoaded()
                : window.addEventListener("load", () => this.onPageLoaded()),
            setTimeout(() => this.hideLoader(), 1e4));
    }
    simulateProgress() {
        let s = setInterval(() => {
            if (this.progress < 90) {
                let s = (Math.random() * (90 - this.progress)) / 10;
                ((this.progress = Math.min(90, this.progress + s)),
                    this.updateProgress(this.progress));
            }
        }, 100);
        this.progressInterval = s;
    }
    updateProgress(s) {
        this.progressFill && (this.progressFill.style.width = `${s}%`);
    }
    onPageLoaded() {
        let s = Date.now() - this.startTime,
            e = Math.max(0, this.options.minDisplayTime - s);
        (this.progressInterval && clearInterval(this.progressInterval),
            this.updateProgress(100),
            setTimeout(() => this.hideLoader(), e));
    }
    hideLoader() {
        (this.loader.classList.add("hidden"),
            this.content && this.content.classList.add("visible"),
            (document.body.style.overflow = ""),
            setTimeout(() => {
                (this.loader.classList.add("removed"),
                    "function" == typeof this.options.onComplete &&
                        this.options.onComplete());
            }, this.options.fadeOutDuration));
    }
    show() {
        (this.loader.classList.remove("hidden", "removed"),
            this.content && this.content.classList.remove("visible"));
    }
    hide() {
        this.hideLoader();
    }
}
const loader = new PageLoader({
    minDisplayTime: 1500,
    fadeOutDuration: 500,
    simulateProgress: !0,
    onComplete() {
        console.log("Page loaded successfully!");
    },
});
