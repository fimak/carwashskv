var dirty = new Image(), clean = new Image(), carsLoad = 0;
clean.src = '/images/sedan_clean.jpg';
clean.width = '1302px';
clean.height = '700px';
clean.naturalHeight = '1302px';
clean.clientWidth = '1302px';
clean.style = 'width: 1302px;';
dirty.src = '/images/sedan_dirty.jpg';
d = 75;
window.onload = initCanvas
