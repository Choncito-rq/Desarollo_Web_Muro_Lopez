-- Unidades Académicas
CREATE TABLE facultades (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL
);

-- Carreras
CREATE TABLE carreras (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    facultad_id INT,
    FOREIGN KEY (facultad_id) REFERENCES facultades(id)
);

-- Usuarios (Estudiantes, Profesores, Admin)
CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    rol ENUM('admin', 'estudiante', 'profesor') DEFAULT 'estudiante'
);

-- Equipos
CREATE TABLE equipos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    descripcion TEXT,
    estado ENUM('disponible', 'prestado', 'mantenimiento') DEFAULT 'disponible'
);

-- Prestamos (El flujo principal)
CREATE TABLE prestamos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT,
    equipo_id INT,
    fecha_solicitud TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_devolucion DATETIME NULL,
    estado ENUM('pendiente', 'aprobado', 'rechazado', 'finalizado') DEFAULT 'pendiente',
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (equipo_id) REFERENCES equipos(id)
);
