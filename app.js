// app.js

document.addEventListener('DOMContentLoaded', () => {
    // Mapeo de deportes a sus imÃ¡genes
    const fondoDeportes = {
        'LIGA EA SPORTS': 'https://i.ibb.co/dQHXqXg/Playing-Football-1.jpg',
        'LIGA HYPERMOTION': 'https://i.ibb.co/dQHXqXg/Playing-Football-1.jpg',
        'CHAMPIONS LEAGUE': 'https://i.ibb.co/dQHXqXg/Playing-Football-1.jpg',
        'YOUTH LEAGUE': 'https://i.ibb.co/dQHXqXg/Playing-Football-1.jpg',
        'YOUTH LEAGUE': 'https://i.ibb.co/dQHXqXg/Playing-Football-1.jpg',
        'MUNDIAL SUB17 (F)': 'https://i.ibb.co/dQHXqXg/Playing-Football-1.jpg',
        'FÃšTBOL SALA': 'https://i.ibb.co/dQHXqXg/Playing-Football-1.jpg',
        'LIGA F': 'https://i.ibb.co/dQHXqXg/Playing-Football-1.jpg',
        'COPA LIBERTADORES': 'https://i.ibb.co/dQHXqXg/Playing-Football-1.jpg',
        'COPA SUDAMÃ‰RICA': 'https://i.ibb.co/dQHXqXg/Playing-Football-1.jpg',
        'PREMIER LEAGUE': 'https://i.ibb.co/dQHXqXg/Playing-Football-1.jpg',
        'AMISTOSO FEMENINO': 'https://i.ibb.co/dQHXqXg/Playing-Football-1.jpg',
        'BOXEO': 'https://i.ibb.co/gW21ck1/boxing-banner-design-template-a05b25000786303fe02a2c24bc06ae18-screen.jpg',
        'BALONCESTO ENDESA': 'https://i.ibb.co/vY0Njgm/Bal-n-de-Basquetbol-1024x576.jpg',
        'LIGA ASOBAL': 'https://i.ibb.co/vY0Njgm/Bal-n-de-Basquetbol-1024x576.jpg',
        'LIGA ENDESA': 'https://i.ibb.co/vY0Njgm/Bal-n-de-Basquetbol-1024x576.jpg',
        'PRIMERA FEB': 'https://i.ibb.co/vY0Njgm/Bal-n-de-Basquetbol-1024x576.jpg',
        'BALONCESTO EUROCUP': 'https://i.ibb.co/vY0Njgm/Bal-n-de-Basquetbol-1024x576.jpg',
        'BALONCESTO EUROLIGA': 'https://i.ibb.co/vY0Njgm/Bal-n-de-Basquetbol-1024x576.jpg',
        'EUROLIGA': 'https://i.ibb.co/vY0Njgm/Bal-n-de-Basquetbol-1024x576.jpg',
        'BALONCESTO LIGA EUROPA': 'https://i.ibb.co/vY0Njgm/Bal-n-de-Basquetbol-1024x576.jpg',
        'TENIS': 'https://i.ibb.co/3cGqQpY/que-es-tenis-foto-1024x768.jpg',
        'ATLETISMO': 'https://i.ibb.co/MSWjJ1d/decatlon.jpg',
        'BALONMANO ASOBAL': 'https://i.ibb.co/Cn6vnrb/chile-balonmano.png',
        'BALONMANO LIGA EUROPA': 'https://i.ibb.co/Cn6vnrb/chile-balonmano.png',
        'NBA': 'img/nba.jpg',
        'CICLISMO PISTA': 'https://i.ibb.co/n3qMvdJ/ciclismo-de-pista-1.jpg',
        'NFL': 'https://i.ibb.co/Y71gcTy/IMG-20240102-152212.jpg',
        'MOTOCICLISMO': 'https://i.ibb.co/LdwxsJJ/f-elconfidencial-com-original-1c7-03d-197-1c703d197f49f70c6049f2c6161744dc.jpg',
        'MOTOR': 'https://i.ibb.co/KK7nq5W/0c0608c53a1c66a1cc013d5be3b8c15e46614b0e-1920.jpg',
        'FÃ“RMULA 1': 'https://i.ibb.co/KK7nq5W/0c0608c53a1c66a1cc013d5be3b8c15e46614b0e-1920.jpg',
        'F1 GP MÃ‰XICO': 'https://i.ibb.co/KK7nq5W/0c0608c53a1c66a1cc013d5be3b8c15e46614b0e-1920.jpg',
        'FIA MOTORSPORT GAME': 'https://i.ibb.co/KK7nq5W/0c0608c53a1c66a1cc013d5be3b8c15e46614b0e-1920.jpg',
        'MOTO GP': 'https://i.ibb.co/LdwxsJJ/f-elconfidencial-com-original-1c7-03d-197-1c703d197f49f70c6049f2c6161744dc.jpg',
        'MOTOGP': 'https://i.ibb.co/LdwxsJJ/f-elconfidencial-com-original-1c7-03d-197-1c703d197f49f70c6049f2c6161744dc.jpg',
        'GOLF': 'https://i.ibb.co/MCHXJSp/pexels-photo-2828723.jpg',
        'HÃPICA ZARZUELA': 'https://i.ibb.co/j8QP2zr/depositphotos-357260308-stock-photo-competing-race-horses-jockeys-taking.jpg',
        'FÃ“RMULA 1 EE.UU': 'https://i.ibb.co/PwRMbKM/Max-Verstappen-le-22-juin-2024-1889792.jpg',
        'NATACIÃ“N': 'https://i.ibb.co/9n3q9Hx/istockphoto-465383082-612x612.jpg',
        'SNOOKER': 'https://i.ibb.co/DV5rb7M/snooker-242136307.jpg',
        'RUGBY': 'https://i.ibb.co/4W2c4Dt/images.jpg',
        'TRIATLÃ“N': 'https://i.ibb.co/Mk9gvYp/juegos-olimpicos-paris-2024-deporte-triatlon.jpg',
        'CICLOCROS': 'https://i.ibb.co/Ny38K8L/Diferencias-entre-ciclocross-y-gravel-19.jpg',
        'WATERPOLO SUPERCOPA (F)': 'https://i.ibb.co/yBq452b/89666a95-9562-4cf5-8e88-da144963f0ae-source-aspect-ratio-default-0.jpg',
        'HOCKEY HIERBA': 'https://www.aprendedeporte.com/wp-content/uploads/2022/01/bola_hockey.jpg',
        'ESQUÃ ALPINO': 'https://i.ibb.co/L0zFbWn/dorsal-esqui-alpino-dossard-chasuble-extensible-alpine-ski-bib-3.jpg',
        'PATINAJE ARTÃSTICO': 'https://i.ibb.co/K0S2rPB/swewwdqkocb5wdlfqowc.jpg',
        'PÃDEL': 'img/Real_Padel.jpg',
        
        // AÃ±ade mÃ¡s deportes aquÃ­
    };

    fetch('evento.json')
        .then(response => response.json())
        .then(data => {
            const eventosContainer = document.getElementById('eventos-container');
            eventosContainer.innerHTML = ''; // Limpiar el loader

            data.forEach(deporte => {
                const deporteSection = document.createElement('section');
                deporteSection.classList.add('deporte');

                // Asignar la imagen de fondo si existe
                const imagenFondo = fondoDeportes[deporte.deporte];
                if (imagenFondo) {
                    deporteSection.style.backgroundImage = `url(${imagenFondo})`;
                    deporteSection.style.backgroundSize = 'cover'; // Asegura que la imagen cubra el Ã¡rea
                    deporteSection.style.backgroundPosition = 'center'; // Centra la imagen
           
    // AÃ±adir transparencia a la imagen de fondo
    // deporteSection.style.backgroundColor = 'rgba(255, 255, 255, 0.5)'; // Color blanco semitransparente al 50%
    deporteSection.style.backgroundColor = 'rgba(100, 100, 100, 0.6)'; // 0.5 Un gris medio semitransparente
    deporteSection.style.backgroundBlendMode = 'overlay'; // Mezcla la transparencia con la imagen        
                    
                }

                const title = document.createElement('h2');
                title.textContent = deporte.deporte;

                // Contenedor para los eventos, inicialmente oculto
                const eventosList = document.createElement('div');
                eventosList.classList.add('eventos-list');
                eventosList.style.display = 'none';

                deporte.eventos.forEach(evento => {
                    const eventoCard = document.createElement('div');
                    eventoCard.classList.add('evento');

                    const hora = document.createElement('p');
                    hora.classList.add('hora');
                    hora.textContent = `Hora: ${evento.hora}`;

                    const descripcion = document.createElement('p');
                    descripcion.classList.add('descripcion');
                    descripcion.textContent = evento.evento;

                    const acestreamLinks = document.createElement('div');
                    acestreamLinks.classList.add('acestream-links');
                    evento.acestream_ids.forEach((id, index) => {
                        const link = document.createElement('a');
                        link.href = `acestream://${id}`;
                        link.target = '_blank';
                        link.textContent = `CANAL ${index + 1}`;
                        acestreamLinks.appendChild(link);
                    });

                    eventoCard.appendChild(hora);
                    eventoCard.appendChild(descripcion);
                    eventoCard.appendChild(acestreamLinks);

                    eventosList.appendChild(eventoCard);
                });

                // AÃ±adir evento para mostrar/ocultar eventos
                title.addEventListener('click', () => {
                    eventosList.style.display = eventosList.style.display === 'none' ? 'block' : 'none';
                });

                deporteSection.appendChild(title);
                deporteSection.appendChild(eventosList);
                eventosContainer.appendChild(deporteSection);
            });
        })
        .catch(error => {
            console.error('Error al cargar los eventos:', error);
        });
});
