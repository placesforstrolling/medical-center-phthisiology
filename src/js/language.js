document.addEventListener('DOMContentLoaded', () => {
    // object with text on different languages
    const langs = {
        ru: {
            'h1': 'Привет!',
            'p': 'Привет как дела этот сайт стоит 17 лмов'
        },
        uz: {
            'h1': 'Salom!',
            'p': 'Salom 17 million'
        },
        en: {
            'h1': 'Hello!',
            'p': 'Hello 17 million'
        }
    }

//checking hash and push correct lang text
    if (typeof window.location.hash !== 'undefined' || window.location.hash === '#uz' || window.location.hash === '#ru') {
        const hash = window.location.hash.slice(1),
              elements = document.querySelectorAll('.lang');
        elements.forEach(el => {
            const dataLang = el.getAttribute('data-lang');
            el.textContent = langs[hash][dataLang];
        });
    }
// reload page on lang click
    const reload = document.querySelectorAll('[data-reload]');
    reload.forEach(item => {
        item.addEventListener('click', () => {
            setTimeout(() => {
                location.reload(true);
            }, 100)
        });
    }); 
});