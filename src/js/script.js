
// отправка файлов
const fileDropArea = document.getElementById('file-drop-area');

fileDropArea.addEventListener('dragover', (event) => {
    event.preventDefault();
    fileDropArea.classList.add('drag-over');
});

fileDropArea.addEventListener('dragleave', () => {
    fileDropArea.classList.remove('drag-over');
});

fileDropArea.addEventListener('drop', (event) => {
    event.preventDefault();
    fileDropArea.classList.remove('drag-over');
  
    const files = event.dataTransfer.files;
    // Do something with the dropped files
});