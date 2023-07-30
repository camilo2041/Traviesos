CREATE DATABASE traviesos;
USE traviesos;
CREATE TABLE productos(
    idProducto INT(11) NOT NULL AUTO_INCREMENT,
    nomProducto VARCHAR(30) NOT NULL,
    precioProducto VARCHAR(50) NOT NULL,
    imgProducto VARCHAR(100) NOT NULL,
    descripProducto VARCHAR(50) NOT NULL,
    idMarca INT(11) NOT NULL,
    idCategoria INT(11) NOT NULL,
    PRIMARY KEY (idProducto),
    CONSTRAINT fkMarca FOREIGN KEY (idMarca) REFERENCES marcas(idMarca),
    CONSTRAINT fkCategoria FOREIGN KEY (idCategoria) REFERENCES categorias(idCategoria)
);

CREATE TABLE marcas(
    idMarca INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomMarca VARCHAR(30) NOT NULL
);


CREATE TABLE categorias(
    idCategoria INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomCategoria VARCHAR(30) NOT NULL
);

CREATE TABLE stock(
    idStock INT(11) NOT NULL AUTO_INCREMENT,
    idProducto INT(11) NOT NULL,
    stockCantidad INT(11) NOT NULL,
    PRIMARY KEY(idStock),
    CONSTRAINT fkProducto FOREIGN KEY(idProducto) REFERENCES productos(idProducto)
);

CREATE TABLE clientes(
    idCliente INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomCliente VARCHAR(30) NOT NULL,
    apeCliente VARCHAR(30) NOT NULL,
    tipoDocCliente VARCHAR(5) NOT NULL,
    numDocCliente VARCHAR(20) NOT NULL,
    direccionCliente VARCHAR(30) NOT NULL,
    telCliente VARCHAR(30) NOT NULL,
    emailCliente VARCHAR(50) NOT NULL
);

CREATE TABLE rol(
    idRol INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomRol VARCHAR(30) NOT NULL,
    descRol VARCHAR(50) NOT NULL
);

CREATE TABLE empleados(
    idEmpleado INT(11) NOT NULL AUTO_INCREMENT,
    nomEmpleado VARCHAR(30) NOT NULL,
    apeEmpleado VARCHAR(30) NOT NULL,
    tipoDocEmpleado VARCHAR(5) NOT NULL,
    numDocEmpleado VARCHAR(20) NOT NULL,
    direccionEmpleado VARCHAR(30) NOT NULL,
    telEmpleado VARCHAR(30) NOT NULL,
    emailEmpleado VARCHAR(50) NOT NULL,
    idRol INT(11) NOT NULL,
    PRIMARY KEY(idEmpleado),
    CONSTRAINT fkRol FOREIGN KEY(idRol) REFERENCES rol(idRol)
);

CREATE TABLE usuarios(
    idUsuario INT(11) NOT NULL AUTO_INCREMENT,
    idTipoUsuario INT(11) NOT NULL,
    contrasenaUsuario VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL,
    uptaded_at DATETIME NOT NULL,
    idCliente INT(11),
    idEmpleado INT(11),
    PRIMARY KEY(idUsuario),
    CONSTRAINT fkCliente FOREIGN KEY(idCliente) REFERENCES clientes(idCliente),
    CONSTRAINT fkEmpleado FOREIGN KEY(idEmpleado) REFERENCES empleados(idEmpleado)
);

CREATE TABLE ventas(
    idVenta INT(11) NOT NULL AUTO_INCREMENT,
    idCliente INT(11) NOT NULL,
    fechaVenta DATETIME NOT NULL,
    totalVenta VARCHAR(30) NOT NULL,
    descuentoCompra VARCHAR(30),
    PRIMARY KEY (idVenta),
    FOREIGN KEY (idCliente) REFERENCES clientes(idCliente)
);

CREATE TABLE productos_ventas(
    idProducto INT(11) NOT NULL,
    idVenta INT(11) NOT NULL,
    cantProductoVendido INT(11) NOT NULL,
    CONSTRAINT fkProductoVenta FOREIGN KEY (idProducto) REFERENCES productos(idProducto),
    CONSTRAINT fkVenta FOREIGN KEY (idVenta) REFERENCES ventas(idVenta)
);

CREATE TABLE comprobante_pago(
    idComprobante INT(11) NOT NULL AUTO_INCREMENT,
    idVenta INT(11) NOT NULL,
    PRIMARY KEY (idComprobante),
    CONSTRAINT fkVentaPago FOREIGN KEY (idVenta) REFERENCES ventas(idVenta)
);

CREATE TABLE proveedores(
    idProveedor INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomProveedor VARCHAR(30) NOT NULL,
    apeProveedor VARCHAR(30) NOT NULL,
    telProveedor VARCHAR(50) NOT NULL
);

CREATE TABLE compras(
    idCompra INT(11) NOT NULL AUTO_INCREMENT,
    fechaCompra DATETIME NOT NULL,
    idProducto INT(11) NOT NULL,
    cantProductoComprado INT(11) NOT NULL,
    idProveedor INT(11) NOT NULL,
    PRIMARY KEY (idCompra),
    CONSTRAINT fkProductoCompra FOREIGN KEY (idProducto) REFERENCES productos(idProducto),
    CONSTRAINT fkProveedor FOREIGN KEY (idProveedor) REFERENCES proveedores(idProveedor)
);

CREATE TABLE proveedores_productos(
    idProducto INT(11) NOT NULL,
    idProveedor INT(11) NOT NULL,
    CONSTRAINT fkProductosProv FOREIGN KEY (idProducto) REFERENCES productos(idProducto),
    CONSTRAINT fkProveedorProduc FOREIGN KEY(idProveedor) REFERENCES proveedores(idProveedor)
);

CREATE TABLE pqrs(
    idPqrs INT(11) NOT NULL AUTO_INCREMENT,
    descripcionPqrs VARCHAR(100) NOT NULL, 
    idCliente INT(11) NOT NULL,
    created_at DATETIME NOT NULL,
    estadoPqrs VARCHAR(20) NOT NULL,
    fechaRespuesta DATETIME NOT NULL,
    PRIMARY KEY(idPqrs),
    CONSTRAINT fkClientePQRS FOREIGN KEY(idCliente) REFERENCES clientes(idCliente)
);