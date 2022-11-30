document.querySelectorAll('.aDodajDoKoszyka').forEach((elem) => {
    elem.addEventListener('click', async (e) => {
        e.preventDefault()
        const a = e.currentTarget
        const href = a.getAttribute('href')
        const resp = await fetch(href, {method: 'post'})
        const text = await resp.text()

        if (text === 'ok') {
            const ok = document.createElement('i')
            ok.classList.add('fas', 'fa-check-circle', 'text-success')
            a.parentNode.replaceChild(ok, a)

            let text = document.getElementById('koszykLiczba').innerText.replace (/[^\d.]/g, '');
            let liczba = parseInt(text, 10);
            liczba++;
            document.getElementById('koszykLiczba').innerHTML = "Liczba ofert w koszyku: <strong>" + liczba.toString() + "</strong>";
        } else {
            alert('Wystąpił błąd')
        }
    })
})