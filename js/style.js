window.addEventListener("load", function(){
    const links = [...document.querySelectorAll(".detail")];
    links.forEach(item => item.addEventListener("mouseenter", handleHoverLink));
    const line = this.document.createElement("div");
    line.className = "line-effect";
    document.body.appendChild(line)
    function handleHoverLink(event){
        const {lefs, top, width, height}= event.target.getBoundingClientRect();
        console.log({left, top, width, height});
        const offsetBottom = 5;
        line.style.width = `${width}px`;
        line.style.left = `${left}px`;
        line.style.top = `${top + height + offsetBottom}px`;
    }
    const menu = this.document.querySelector("navbar");
    menu.addEventListener("mouseleave", function(){
        line.style.width = 0;
    })
})