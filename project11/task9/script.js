function calculate() {
    const functionType = document.getElementById('function').value;
    const startAngle = parseFloat(document.getElementById('start').value);
    const endAngle = parseFloat(document.getElementById('end').value);
    const step = parseFloat(document.getElementById('step').value);

    if (isNaN(startAngle) || isNaN(endAngle) || isNaN(step)) {
        alert('Пожалуйста, введите числовые значения.');
        return;
    }

    let table = '<table border="1">';
    table += '<tr><th>Угол в градусах</th><th>Угол в радианах</th><th>' + functionType + '</th></tr>';

    for (let angle = startAngle; angle <= endAngle; angle += step) {
        const radians = (angle * Math.PI) / 180;
        const result = Math[functionType](radians).toFixed(4);

        table += `<tr><td>${angle}</td><td>${radians.toFixed(4)}</td><td>${result}</td></tr>`;
    }

    table += '</table>';

    const newWindow = window.open();
    newWindow.document.write('<html><head><title>Таблица</title></head><body>' + table + '</body></html>');
}
