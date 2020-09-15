$(document).ready(function () {
    function loading(min,max){
        for(let i = 1;i<=30;i++)
        {
            let rand =  Math.floor(Math.random() * (max - min)) + min ;
            document.getElementById('nb_'+ i + '_'+ rand).style.display = 'block';
        }
    }
    loading(1,6);
});