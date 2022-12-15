
(() => {
    'use strict'
    const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(tooltipTriggerEl => {
      new bootstrap.Tooltip(tooltipTriggerEl)
    })
  })()

/* filter */

const INPUT_SEARCH = document.getElementById('input-search');
const DIVS_POSTS = document.getElementById('divs-posts');

INPUT_SEARCH.addEventListener('keyup', () => {
    let expressao = INPUT_SEARCH.value.toLowerCase();

    let linhas = DIVS_POSTS.getElementsByClassName('bck-owner');

    for (let posicao in linhas) {
      console.log(linhas);
      if (true === isNaN(posicao)){
        continue;
      }

      let conteudoDaLinha = linhas[posicao].innerHTML.toLowerCase();

      if(true === conteudoDaLinha.includes(expressao)){
        linhas[posicao].style.display = '';
      } else {
        linhas[posicao].style.display = 'none';
      }
    }
});

/* end filter */
