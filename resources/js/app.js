import './bootstrap';
import { ResourceLoader } from './loader';

document.addEventListener('DOMContentLoaded', () => {
    const loader = new ResourceLoader();
    loader.init();
});

// Manejar actualizaciones de Livewire
document.addEventListener('livewire:load', () => {
    Livewire.on('contentChanged', () => {
        const loader = new ResourceLoader();
        loader.checkImages(); // Solo verificar nuevas imágenes
    });
});
