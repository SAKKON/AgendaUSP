
        // Selecciona todas las celdas de fecha
const dateCells = document.querySelectorAll('td[data-datetime]');

// Loop a través de cada celda de fecha
dateCells.forEach((cell) => {
  // Agrega un listener de clic a cada celda
  cell.addEventListener('click', () => {
    // Obtener la fecha y hora de la celda
    const datetime = cell.dataset.datetime;

    // Mostrar la fecha y hora en una ventana de alerta
    alert(`Has seleccionado la fecha y hora: ${datetime}`);
  });
});
