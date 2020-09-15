window.onload = () =>{
    let input = document.querySelector('#input');
    input.oninput = function(){
        let value = this.value.trim();
        let list = document.querySelectorAll('.list_item');

        var old_ground = 'vocabulary_words_A';
        function voc(name) {
            let val = name.substr(0,1).toUpperCase();
            document.getElementById('words_'+val).click(function () {
                var new_ground = $(this).attr('id');
                if (old_ground == 'vocabulary_'+new_ground)
                {
                    document.getElementById(old_ground).style.display = 'flex';
                }
                else
                {
                    document.getElementById(old_ground).style.display = 'none';
                    document.getElementById('vocabulary_'+new_ground).style.display = 'flex';
                    old_ground = 'vocabulary_'+new_ground;
                }
            });
        }

        if (value!= ''){
            voc(value);
            list.forEach(elem =>{
                if (elem.innerText.search(value) == -1){
                    elem.classList.add('hide');
                }
                else {
                    elem.classList.remove('hide');
                }
            });
        }
        else{
            voc('A');
            list.forEach(elem => {
                elem.classList.remove('hide');
            });
        }
    };
};


