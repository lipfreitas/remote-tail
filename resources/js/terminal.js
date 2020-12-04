window.RemoteTail = function (){
    return {
        initialize: function () {

        },
        Terminal: {
            instance: null,
            connect: function (host, port, element) {
                element = document.getElementById(element);
                let bottom = element.nextSibling
                console.log(element);
                this.instance = new WebSocket(`ws://${host}:${port}`);
                this.instance.onmessage = function (e) {
                    element.textContent =  element.textContent + '>  ' +e.data + '\n';
                    window.scrollTo(0,document.body.scrollHeight);
                }
            },
        }
    }
}
module.exports = {
    RemoteTail
}
