window.addEventListener('load', (event)=>{
    const deg=6;
    const hr = document.getElementById('hr');
    const mn = document.getElementById('mn');
    const sc = document.getElementById('sc');
    const dt = document.getElementById('dt');
    setInterval(() => {

        let day = new Date();
        let hh = day.getHours() ;
        let mm = day.getMinutes();
        let ss = day.getSeconds();
        let weekdays = [
            'Воскресение',
            'Понедельник',
            'Вторник',
            'Среда',
            'Четверг',
            'Пятница',
            'Суббота'
        ];
        let dateStr = day.toLocaleString('ru', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });

        hr.innerHTML= hh;
        mn.innerHTML= mm;
        sc.innerHTML= ss;
        dt.innerHTML= `${dateStr} ${weekdays[day.getDay()]}`;
    })
}, false )
