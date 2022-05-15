window.onload = function (){
    const kaique  = document.querySelector('.nlogin');
    console.log(kaique);
    const output = document.querySelector('output');
    const input  = document.querySelector('.chat');
    const ws     = new WebSocket('ws://localhost:8002/');
    input.addEventListener('keypress', e =>{
        if(e.key === 'Enter'){
            const div = document.createElement('div');
            const valorInput = input.value;
            const nlogin     = kaique.value;
            const chat       = `${nlogin}: ${valorInput}`;
            div.textContent  = `Eu: ${valorInput}`;
            output.append(div);

            ws.send(chat);

            input.value = '';
        }
    })

    ws.addEventListener('message',message => {
        const div = document.createElement('div');
        const nlogin     = kaique.value;
        div.textContent = `${message.data}`;
        output.append(div);
    });

};