let btn1Clicked = false;

document.getElementById('btn1').addEventListener('click', () => {
    btn1Clicked = true;
});

document.getElementById('btn2').addEventListener('click', () => {
    if (btn1Clicked) {
        const p = document.getElementById('par');
        p.style.display = (p.style.display === 'none') ? '' : 'none';
        btn1Clicked = false;
    }
});