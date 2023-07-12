
export default function setBodyColor({color}) {
    document.documentElement.style.setProperty('--bodyColor', color)
    document.body.style.backgroundColor = color
}
