export class ResourceLoader {
    constructor() {
        this.resources = [];
        this.loadingScreen = document.getElementById('loading-screen');
        this.mainContent = document.getElementById('main-content');
    }

    init() {
        this.checkFonts();
        this.checkImages();
        this.checkStylesheets();
        this.waitForResources();
    }

    checkFonts() {
        document.fonts.ready.then(() => {
            console.log('Fuentes cargadas correctamente');
        });
    }

    checkImages() {
        document.querySelectorAll('img').forEach(img => {
            if (!img.complete) {
                this.resources.push(
                    new Promise(resolve => {
                        img.addEventListener('load', resolve);
                        img.addEventListener('error', resolve);
                    })
                );
            }
        });
    }

    checkStylesheets() {
        document.querySelectorAll('link[rel="stylesheet"]').forEach(stylesheet => {
            if (!stylesheet.sheet) {
                this.resources.push(
                    new Promise(resolve => {
                        stylesheet.onload = resolve;
                        stylesheet.onerror = resolve;
                    })
                );
            }
        });
    }

    waitForResources() {
        Promise.all(this.resources)
            .then(() => this.showContent())
            .catch(error => {
                console.error('Error al cargar recursos:', error);
                this.showContent(); // Mostrar contenido de todos modos
            });
    }

    showContent() {
        setTimeout(() => {
            this.loadingScreen.style.opacity = '0';
            this.mainContent.classList.remove('content-hidden');
            this.mainContent.classList.add('content-visible');

            setTimeout(() => {
                this.loadingScreen.style.display = 'none';
            }, 500);
        }, 500);
    }
} 