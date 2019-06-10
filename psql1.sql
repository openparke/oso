--
-- PostgreSQL database dump
--

-- Dumped from database version 11.2 (Ubuntu 11.2-1.pgdg16.04+1)
-- Dumped by pg_dump version 11.2 (Ubuntu 11.2-1.pgdg16.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: esquemadav; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA esquemadav;


ALTER SCHEMA esquemadav OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: Usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Usuario" (
    "idUsuario" bigint NOT NULL,
    "Usuario" character varying(45),
    "Contrasena" character varying(45),
    "Rol" character varying(45),
    "Estados" character varying(45)
);


ALTER TABLE public."Usuario" OWNER TO postgres;

--
-- Name: Usuario_idUsuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Usuario_idUsuario_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Usuario_idUsuario_seq" OWNER TO postgres;

--
-- Name: Usuario_idUsuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Usuario_idUsuario_seq" OWNED BY public."Usuario"."idUsuario";


--
-- Name: autorizacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.autorizacion (
    idautorizacion bigint NOT NULL,
    aceptaprimer character varying(10),
    aceptasegundo character varying(10),
    nombre character varying(100),
    apellido character varying(100),
    correo character varying(200),
    telefono character varying(100)
);


ALTER TABLE public.autorizacion OWNER TO postgres;

--
-- Name: autorizacion_idautorizacion_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.autorizacion_idautorizacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.autorizacion_idautorizacion_seq OWNER TO postgres;

--
-- Name: autorizacion_idautorizacion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.autorizacion_idautorizacion_seq OWNED BY public.autorizacion.idautorizacion;


--
-- Name: entidad; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.entidad (
    identidad bigint NOT NULL,
    nombreentidad character varying(200),
    tipo character varying(200)
);


ALTER TABLE public.entidad OWNER TO postgres;

--
-- Name: entidad_identidad_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.entidad_identidad_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.entidad_identidad_seq OWNER TO postgres;

--
-- Name: entidad_identidad_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.entidad_identidad_seq OWNED BY public.entidad.identidad;


--
-- Name: informacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.informacion (
    idinformacion bigint NOT NULL,
    matricula character varying(100),
    estadocivil character varying(100),
    tipodocumento character varying(100),
    numerodocumento integer,
    solicitud character varying(100)
);


ALTER TABLE public.informacion OWNER TO postgres;

--
-- Name: informacion_idinformacion_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.informacion_idinformacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.informacion_idinformacion_seq OWNER TO postgres;

--
-- Name: informacion_idinformacion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.informacion_idinformacion_seq OWNED BY public.informacion.idinformacion;


--
-- Name: notaria; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.notaria (
    idnotaria bigint NOT NULL,
    "Nombresnotaria" character varying,
    "NumeroDocumentonotaria" integer,
    "CorreoElectroniconotaria" character varying,
    "fk_idUsuario" bigint NOT NULL,
    fk_idsucursal bigint NOT NULL
);


ALTER TABLE public.notaria OWNER TO postgres;

--
-- Name: notaria_fk_idUsuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."notaria_fk_idUsuario_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."notaria_fk_idUsuario_seq" OWNER TO postgres;

--
-- Name: notaria_fk_idUsuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."notaria_fk_idUsuario_seq" OWNED BY public.notaria."fk_idUsuario";


--
-- Name: notaria_fk_idsucursal_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.notaria_fk_idsucursal_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.notaria_fk_idsucursal_seq OWNER TO postgres;

--
-- Name: notaria_fk_idsucursal_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.notaria_fk_idsucursal_seq OWNED BY public.notaria.fk_idsucursal;


--
-- Name: notaria_idnotaria_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.notaria_idnotaria_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.notaria_idnotaria_seq OWNER TO postgres;

--
-- Name: notaria_idnotaria_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.notaria_idnotaria_seq OWNED BY public.notaria.idnotaria;


--
-- Name: preguntascomunes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.preguntascomunes (
    idpreguntas bigint NOT NULL,
    preguntas character varying(300),
    respuestas character varying(300)
);


ALTER TABLE public.preguntascomunes OWNER TO postgres;

--
-- Name: preguntascomunes_idpreguntas_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.preguntascomunes_idpreguntas_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.preguntascomunes_idpreguntas_seq OWNER TO postgres;

--
-- Name: preguntascomunes_idpreguntas_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.preguntascomunes_idpreguntas_seq OWNED BY public.preguntascomunes.idpreguntas;


--
-- Name: simuladorleasing; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.simuladorleasing (
    idsimuladorleasing bigint NOT NULL,
    valorleasing character varying(100),
    fechaleasing character varying(100),
    fk_idsolicitud bigint NOT NULL
);


ALTER TABLE public.simuladorleasing OWNER TO postgres;

--
-- Name: simuladorleasing_fk_idsolicitud_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.simuladorleasing_fk_idsolicitud_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.simuladorleasing_fk_idsolicitud_seq OWNER TO postgres;

--
-- Name: simuladorleasing_fk_idsolicitud_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.simuladorleasing_fk_idsolicitud_seq OWNED BY public.simuladorleasing.fk_idsolicitud;


--
-- Name: simuladorleasing_idsimuladorleasing_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.simuladorleasing_idsimuladorleasing_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.simuladorleasing_idsimuladorleasing_seq OWNER TO postgres;

--
-- Name: simuladorleasing_idsimuladorleasing_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.simuladorleasing_idsimuladorleasing_seq OWNED BY public.simuladorleasing.idsimuladorleasing;


--
-- Name: solicitud; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.solicitud (
    idsolicitud bigint NOT NULL,
    matriculainmobiliaria character varying(110),
    cedulapropietario bigint,
    estadocivilpropietario character varying(200),
    nombrelocatario character varying(120),
    tipodocumentolocatario character varying(200),
    cedulalocatario bigint,
    numerosolicitud character varying(130),
    fecha character varying(140),
    sucursal character varying(200),
    estado character varying(150),
    observacion character varying(900),
    fk_idnotaria bigint NOT NULL,
    nombreotrolocatario character varying(160),
    primerapellido character varying(170),
    segundoapellido character varying(180),
    documentoinformador character varying(200),
    documentonotaria character varying(200),
    fk_idautorizacion bigint NOT NULL,
    terceramatricula character varying(190),
    tercerdocumento character varying(200),
    cuartamatricula character varying(191),
    cuartodocumento character varying(200),
    quintamatricula character varying(192),
    quintodocumento character varying(200),
    tipopersona character varying(200),
    tipoacto character varying(200),
    "ValEscritura" character varying(200),
    "ValHipoteca" character varying(200),
    "ValVenta" character varying(200),
    docprimernotaria character varying(200),
    docsegundonotaria character varying(200),
    docterceronotaria character varying(200),
    doccuartonotaria character varying(200),
    docquintonotaria character varying(200),
    checkprimero character varying(200),
    checksegundo character varying(200),
    checktercero character varying(200),
    checkcuarto character varying(200),
    checkquinto character varying(200),
    viabilidad character varying(200),
    observacionesnotaria character varying(200),
    fechanotaria character varying(200)
);


ALTER TABLE public.solicitud OWNER TO postgres;

--
-- Name: solicitud_fk_idautorizacion_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.solicitud_fk_idautorizacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.solicitud_fk_idautorizacion_seq OWNER TO postgres;

--
-- Name: solicitud_fk_idautorizacion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.solicitud_fk_idautorizacion_seq OWNED BY public.solicitud.fk_idautorizacion;


--
-- Name: solicitud_fk_idnotaria_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.solicitud_fk_idnotaria_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.solicitud_fk_idnotaria_seq OWNER TO postgres;

--
-- Name: solicitud_fk_idnotaria_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.solicitud_fk_idnotaria_seq OWNED BY public.solicitud.fk_idnotaria;


--
-- Name: solicitud_idsolicitud_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.solicitud_idsolicitud_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.solicitud_idsolicitud_seq OWNER TO postgres;

--
-- Name: solicitud_idsolicitud_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.solicitud_idsolicitud_seq OWNED BY public.solicitud.idsolicitud;


--
-- Name: sucursal; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sucursal (
    idsucursal bigint NOT NULL,
    nombre character varying(200),
    direccion character varying(200),
    fk_identidad bigint NOT NULL
);


ALTER TABLE public.sucursal OWNER TO postgres;

--
-- Name: sucursal_fk_identidad_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sucursal_fk_identidad_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sucursal_fk_identidad_seq OWNER TO postgres;

--
-- Name: sucursal_fk_identidad_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sucursal_fk_identidad_seq OWNED BY public.sucursal.fk_identidad;


--
-- Name: sucursal_idsucursal_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sucursal_idsucursal_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sucursal_idsucursal_seq OWNER TO postgres;

--
-- Name: sucursal_idsucursal_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sucursal_idsucursal_seq OWNED BY public.sucursal.idsucursal;


--
-- Name: test; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.test (
    idnotaria bigint,
    "Nombresnotaria" character varying,
    "NumeroDocumentonotaria" integer,
    "CorreoElectroniconotaria" character varying,
    "fk_idUsuario" bigint,
    fk_idsucursal bigint,
    "idUsuario" bigint,
    "Usuario" character varying(45),
    "Contrasena" character varying(45),
    "Rol" character varying(45),
    "Estados" character varying(45)
);


ALTER TABLE public.test OWNER TO postgres;

--
-- Name: Usuario idUsuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Usuario" ALTER COLUMN "idUsuario" SET DEFAULT nextval('public."Usuario_idUsuario_seq"'::regclass);


--
-- Name: autorizacion idautorizacion; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.autorizacion ALTER COLUMN idautorizacion SET DEFAULT nextval('public.autorizacion_idautorizacion_seq'::regclass);


--
-- Name: entidad identidad; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.entidad ALTER COLUMN identidad SET DEFAULT nextval('public.entidad_identidad_seq'::regclass);


--
-- Name: informacion idinformacion; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informacion ALTER COLUMN idinformacion SET DEFAULT nextval('public.informacion_idinformacion_seq'::regclass);


--
-- Name: notaria idnotaria; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.notaria ALTER COLUMN idnotaria SET DEFAULT nextval('public.notaria_idnotaria_seq'::regclass);


--
-- Name: notaria fk_idUsuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.notaria ALTER COLUMN "fk_idUsuario" SET DEFAULT nextval('public."notaria_fk_idUsuario_seq"'::regclass);


--
-- Name: notaria fk_idsucursal; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.notaria ALTER COLUMN fk_idsucursal SET DEFAULT nextval('public.notaria_fk_idsucursal_seq'::regclass);


--
-- Name: preguntascomunes idpreguntas; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.preguntascomunes ALTER COLUMN idpreguntas SET DEFAULT nextval('public.preguntascomunes_idpreguntas_seq'::regclass);


--
-- Name: simuladorleasing idsimuladorleasing; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.simuladorleasing ALTER COLUMN idsimuladorleasing SET DEFAULT nextval('public.simuladorleasing_idsimuladorleasing_seq'::regclass);


--
-- Name: simuladorleasing fk_idsolicitud; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.simuladorleasing ALTER COLUMN fk_idsolicitud SET DEFAULT nextval('public.simuladorleasing_fk_idsolicitud_seq'::regclass);


--
-- Name: solicitud idsolicitud; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.solicitud ALTER COLUMN idsolicitud SET DEFAULT nextval('public.solicitud_idsolicitud_seq'::regclass);


--
-- Name: solicitud fk_idnotaria; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.solicitud ALTER COLUMN fk_idnotaria SET DEFAULT nextval('public.solicitud_fk_idnotaria_seq'::regclass);


--
-- Name: solicitud fk_idautorizacion; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.solicitud ALTER COLUMN fk_idautorizacion SET DEFAULT nextval('public.solicitud_fk_idautorizacion_seq'::regclass);


--
-- Name: sucursal idsucursal; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sucursal ALTER COLUMN idsucursal SET DEFAULT nextval('public.sucursal_idsucursal_seq'::regclass);


--
-- Name: sucursal fk_identidad; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sucursal ALTER COLUMN fk_identidad SET DEFAULT nextval('public.sucursal_fk_identidad_seq'::regclass);


--
-- Data for Name: Usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."Usuario" ("idUsuario", "Usuario", "Contrasena", "Rol", "Estados") FROM stdin;
2	Informador	c5678868d9fb230f382959be82533c04	Informador	\N
3	Informador	c5678868d9fb230f382959be82533c04	Informador	Activo
1	Administrador	3bf6a1cbda512abe8ffc653beba3b2f6	Administrador	Activo
4	kaladmin	bbed13f00c7534d19da78c4cc1fc743a	Cliente	Activo
5	Notaria	11356f48c8f65b9966527ce582176d0a	Notaria	Activo
6	Informadorr	fa7547328747b551fff153b73311db45	Informador	Activo
7	Gerente	86402062cc83db8aa4abeaf9f82b6edf	Gerente	Activo
8	Supervisor	3883bd05f8738bd77eac95110f37656d	Supervisor	Activo
9	Inmobiliaria	26c7ae2f88eba576d44ea09bd15da558	Inmobiliaria	Activo
\.


--
-- Data for Name: autorizacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.autorizacion (idautorizacion, aceptaprimer, aceptasegundo, nombre, apellido, correo, telefono) FROM stdin;
59	Si	Si	prueba2	prueba2	Cédula de extranjería	22222
60	Si	Si	prueba3	prueba3	Nit para personas jurídicas	3333333333
61	Si	Si	prueba4	prueba4	Cédula de extranjería	444444444
62	Si	Si	prueba	prueba	Cédula de ciudadanía	1111111111
63	Si	Si	sdgsdg	sdg	Cédula de ciudadanía	876543
64	Si	Si	fdhdh	sdhsdh	Nit para personas jurídicas	765
65	Si	Si	Pepito	Perez	Cédula de ciudadanía	1095463463
66	Si	Si	sdfsadf	sdfasdfa	Cédula de ciudadanía	234234234
67	Si	Si	pruebacorreo	pruebacorreo	Cédula de extranjería	11111
68	Si	Si	pruebacorreo2	pruebacorreo2	Cédula de extranjería	2324234
69	Si	Si	camilo 	lizarazo	Cédula de ciudadanía	1098625584
70	Si	Si	camilo	lizarazo	Cédula de ciudadanía	1098625584
71	Si	Si	CAMILO 	LIZARAZO	Cédula de ciudadanía	1098625584
72	Si	Si	nicolas	lopez	Cédula de extranjería	123456789
73	Si	Si	prueba10abril	prueba10abril	Cédula de extranjería	1010101010
74	Si	Si	camilo	lizarazo	Cédula de ciudadanía	1098625584
75	Si	Si	camilo	lizarazo	Cédula de ciudadanía	67347373
58	Si	Si	prueba1	prueba1	Cédula de ciudadanía	111111
\.


--
-- Data for Name: entidad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.entidad (identidad, nombreentidad, tipo) FROM stdin;
1	Notaria	Notaria
2	Inmobiliaria	Inmobiliaria
\.


--
-- Data for Name: informacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.informacion (idinformacion, matricula, estadocivil, tipodocumento, numerodocumento, solicitud) FROM stdin;
\.


--
-- Data for Name: notaria; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.notaria (idnotaria, "Nombresnotaria", "NumeroDocumentonotaria", "CorreoElectroniconotaria", "fk_idUsuario", fk_idsucursal) FROM stdin;
1	Administrador	1	notaria@	1	1
2	Informador	111	Informador@Informador	3	1
3	camilo	1098625584	camilo@tramiti.com.co	4	1
4	Notaria	11111	Notaria@Notaria	5	1
5	Informadorr	11111	Informadorr@Informadorr	6	2
6	Gerente	22222	Gerente@Gerente	7	2
7	Supervisor	111111111	Supervisor@Supervisor	8	1
8	Inmobiliaria	111111111	Inmobiliaria@Inmobiliaria	9	3
\.


--
-- Data for Name: preguntascomunes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.preguntascomunes (idpreguntas, preguntas, respuestas) FROM stdin;
\.


--
-- Data for Name: simuladorleasing; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.simuladorleasing (idsimuladorleasing, valorleasing, fechaleasing, fk_idsolicitud) FROM stdin;
1	200000000	04-03-2019	1
\.


--
-- Data for Name: solicitud; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.solicitud (idsolicitud, matriculainmobiliaria, cedulapropietario, estadocivilpropietario, nombrelocatario, tipodocumentolocatario, cedulalocatario, numerosolicitud, fecha, sucursal, estado, observacion, fk_idnotaria, nombreotrolocatario, primerapellido, segundoapellido, documentoinformador, documentonotaria, fk_idautorizacion, terceramatricula, tercerdocumento, cuartamatricula, cuartodocumento, quintamatricula, quintodocumento, tipopersona, tipoacto, "ValEscritura", "ValHipoteca", "ValVenta", docprimernotaria, docsegundonotaria, docterceronotaria, doccuartonotaria, docquintonotaria, checkprimero, checksegundo, checktercero, checkcuarto, checkquinto, viabilidad, observacionesnotaria, fechanotaria) FROM stdin;
141	pruebacorreo3	312312321	Casado con sociedad conyugal vigente	pruebacorreo3		13123123	pruebacorreo3@pruebacorreo3	2019/04/1 11:21:15 am	1		pruebacorreo3 pruebacorreo3 pruebacorreo3 pruebacorreo3	2				Almacenamiento/CertificadoscargadosInformador/pruebacorreo3-(01-04-19)-(11.21.42).	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(11.21.42).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(11.21.42).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(11.21.42).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(11.21.42).	Persona Jurídica	Leasing	3123123			Almacenamiento/CertificadoscargadosNotaria/Subido-Notariapruebacorreo3-(01-04-19)-(11.21.42).					No	No	No	No	No			Sin Responder
142	pruebacorreo5	342432432	Entidad	pruebacorreo5		2131231231	pruebacorreo5@pruebacorreo5	2019/04/1 11:51:43 am	1		pruebacorreo5  pruebacorreo5 v	2				Almacenamiento/CertificadoscargadosInformador/pruebacorreo5-(01-04-19)-(11.52.11).	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(11.52.11).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(11.52.11).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(11.52.11).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(11.52.11).	Persona Jurídica	Hipoteca		23123123	2131231	Almacenamiento/CertificadoscargadosNotaria/Subido-Notariapruebacorreo5-(01-04-19)-(11.52.11).					No	No	No	No	No			Sin Responder
143	351251251251	215125	Casado con sociedad conyugal disuelta y liquidada	pepito	Nit para personas jurídicas	65432	pepito@pepito.com	2019/04/1 12:25:10 pm	1		pepito	2	pepito	pepito	pepito	Almacenamiento/CertificadoscargadosInformador/351251251251-(01-04-19)-(12.25.44).	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(12.25.44).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(12.25.44).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(12.25.44).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(12.25.44).	Persona Natural	Leasing	8765432			Almacenamiento/CertificadoscargadosNotaria/Subido-Notaria351251251251-(01-04-19)-(12.25.44).					No	No	No	No	No			Sin Responder
144	pruebacorreo	1231321312312	Soltero sin unión marital de hecho	pruebacorreo	Cédula de extranjería	12312313	pruebacorreo@pruebacorreo	2019/04/1 16:11:45 pm	1		pruebacorreo pruebacorreo pruebacorreo	2		pruebacorreo		Almacenamiento/CertificadoscargadosInformador/pruebacorreo-(01-04-19)-(16.12.20).pdf	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.12.20).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.12.20).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.12.20).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.12.20).	Persona Natural	Hipoteca		3123123123123	21312312312	Almacenamiento/CertificadoscargadosNotaria/Subido-Notariapruebacorreo-(01-04-19)-(16.12.20).					No	No	No	No	No			Sin Responder
145	aceptar	123123123	Casado con sociedad conyugal vigente	aceptar		13212312321	aceptar@aceptar	2019/04/1 16:13:23 pm	1		dasdasdasd	2				Almacenamiento/CertificadoscargadosInformador/aceptar-(01-04-19)-(16.13.49).	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.13.49).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.13.49).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.13.49).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.13.49).	Persona Jurídica	Leasing	12312312312			Almacenamiento/CertificadoscargadosNotaria/Subido-Notariaaceptar-(01-04-19)-(16.13.49).					No	No	No	No	No			Sin Responder
146	correo	23112312321	Entidad	correo	Cédula de extranjería	123123123	correo@correo	2019/04/1 16:16:19 pm	1		correo correo correo	2		correo		Almacenamiento/CertificadoscargadosInformador/correo-(01-04-19)-(16.16.45).	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.16.45).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.16.45).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.16.45).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.16.45).	Persona Natural	Leasing	1234234234			Almacenamiento/CertificadoscargadosNotaria/Subido-Notariacorreo-(01-04-19)-(16.16.45).					No	No	No	No	No			Sin Responder
147	correo2	132131321	Entidad	correo2	Nit para personas jurídicas	34234234	asdasd@correo2	2019/04/1 16:17:50 pm	1		correo2 correo2	2		correo2		Almacenamiento/CertificadoscargadosInformador/correo2-(01-04-19)-(16.18.17).	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.18.17).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.18.17).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.18.17).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.18.17).	Persona Natural	Leasing	13123123			Almacenamiento/CertificadoscargadosNotaria/Subido-Notariacorreo2-(01-04-19)-(16.18.17).					No	No	No	No	No			Sin Responder
148	correooooo	123123123	Entidad	correooooo	Nit para personas jurídicas	123123123	correooooo@correooooo	2019/04/1 16:20:18 pm	1		correooooo correooooo correooooo correooooo 	2		correooooo		Almacenamiento/CertificadoscargadosInformador/correooooo-(01-04-19)-(16.20.47).	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.20.47).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.20.47).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.20.47).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.20.47).	Persona Natural	Leasing	23121321123			Almacenamiento/CertificadoscargadosNotaria/Subido-Notariacorreooooo-(01-04-19)-(16.20.47).					No	No	No	No	No			Sin Responder
149	correooooo	436236	Casado con sociedad conyugal disuelta y liquidada	correooooo	Cédula de ciudadanía	326236	correooooo@trye	2019/04/1 16:24:19 pm	1		correooooo	2	correooooo	correooooo	correooooo	Almacenamiento/CertificadoscargadosInformador/correooooo-(01-04-19)-(16.25.14).	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.25.14).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.25.14).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.25.14).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.25.14).	Persona Natural	Leasing	8675432			Almacenamiento/CertificadoscargadosNotaria/Subido-Notariacorreooooo-(01-04-19)-(16.25.14).					No	No	No	No	No			Sin Responder
132	50c-prueba1aaaaaaaa	11111111111111	No se sabe	prueba1	Cédula de ciudadanía	1111111111111	prueba@1	2019/03/29 09:18:27 am	1	50c-prueba1bbbbbb	prueba1 prueba1 prueba1 	2	prueba1	prueba1	prueba1	Almacenamiento/CertificadoscargadosInformador/50c-prueba1aaaaaaaa-(29-03-19)-(09.20.14).pdf	Almacenamiento/CertificadoscargadosInformador/50c-prueba1bbbbbb-(29-03-19)-(09.20.14).pdf	0	50c-prueba1ccccc	Almacenamiento/CertificadoscargadosInformador/50c-prueba1ccccc-(29-03-19)-(09.20.14).pdf	50c-prueba1ddddd	Almacenamiento/CertificadoscargadosInformador/50c-prueba1ddddd-(29-03-19)-(09.20.14).pdf	50c-prueba1eeeee	Almacenamiento/CertificadoscargadosInformador/50c-prueba1eeeee-(29-03-19)-(09.20.14).pdf	Persona Natural	Leasing	100000000			Almacenamiento/CertificadoscargadosNotaria/50c-prueba1aaaaaaaa-(29-03-19)-(09.37.30).pdf	Almacenamiento/CertificadoscargadosNotaria/50c-prueba1bbbbbb-(29-03-19)-(09.37.30).pdf	Almacenamiento/CertificadoscargadosNotaria/50c-prueba1ccccc-(29-03-19)-(09.37.30).pdf	Almacenamiento/CertificadoscargadosNotaria/50c-prueba1ddddd-(29-03-19)-(09.37.30).pdf	Almacenamiento/CertificadoscargadosNotaria/50c-prueba1eeeee-(29-03-19)-(09.37.30).pdf	Si	Si	Si	Si	Si	s	 se tiene cierto problema	2019/03/29 09:36:47 am
133	50c-prueba2aaaaaaaa	222222222222	Entidad	prueba2	Cédula de extranjería	222222222	prueba2@prueba2	2019/03/29 09:26:47 am	1	50c-prueba2bbbbbbbbbbb	prueba2 prueba2 prueba2 prueba2 	2		prueba2	prueba2	Almacenamiento/CertificadoscargadosInformador/50c-prueba2aaaaaaaa-(29-03-19)-(09.29.15).pdf	Almacenamiento/CertificadoscargadosInformador/50c-prueba2bbbbbbbbbbb-(29-03-19)-(09.29.15).pdf	0		Almacenamiento/CertificadoscargadosInformador/-(29-03-19)-(09.29.15).		Almacenamiento/CertificadoscargadosInformador/-(29-03-19)-(09.29.15).		Almacenamiento/CertificadoscargadosInformador/-(29-03-19)-(09.29.15).	Persona Natural	Hipoteca		100000000	200000000	Almacenamiento/CertificadoscargadosNotaria/50c-prueba2aaaaaaaa-(29-03-19)-(09.37.55).pdf	Almacenamiento/CertificadoscargadosNotaria/50c-prueba2bbbbbbbbbbb-(29-03-19)-(09.37.55).pdf	Almacenamiento/CertificadoscargadosNotaria/-(29-03-19)-(09.37.55).	Almacenamiento/CertificadoscargadosNotaria/-(29-03-19)-(09.37.55).	Almacenamiento/CertificadoscargadosNotaria/-(29-03-19)-(09.37.55).	Si	Si	No	No	No	v	  viable	2019/03/29 09:37:36 am
134	50c-prueba3aaaaaaa	33333333333	Casado con sociedad conyugal vigente	prueba3		33333333333	prueba3@prueba3	2019/03/29 09:46:30 am	2	50c-prueba3bbbbbb	prueba3 prueba3 	5				Almacenamiento/CertificadoscargadosInformador/50c-prueba3aaaaaaa-(29-03-19)-(09.47.43).pdf	Almacenamiento/CertificadoscargadosInformador/50c-prueba3bbbbbb-(29-03-19)-(09.47.43).pdf	0	50c-prueba3ccccccc	Almacenamiento/CertificadoscargadosInformador/50c-prueba3ccccccc-(29-03-19)-(09.47.43).pdf	50c-prueba3ddddd	Almacenamiento/CertificadoscargadosInformador/50c-prueba3ddddd-(29-03-19)-(09.47.43).pdf		Almacenamiento/CertificadoscargadosInformador/-(29-03-19)-(09.47.43).	Persona Jurídica	Leasing	300000000			Almacenamiento/CertificadoscargadosNotaria/50c-prueba3aaaaaaa-(29-03-19)-(09.48.56).pdf	Almacenamiento/CertificadoscargadosNotaria/50c-prueba3bbbbbb-(29-03-19)-(09.48.56).pdf	Almacenamiento/CertificadoscargadosNotaria/50c-prueba3ccccccc-(29-03-19)-(09.48.56).pdf	Almacenamiento/CertificadoscargadosNotaria/50c-prueba3ddddd-(29-03-19)-(09.48.56).pdf	Almacenamiento/CertificadoscargadosNotaria/-(29-03-19)-(09.48.56).	Si	Si	Si	No	No	n	 no es viable 	2019/03/29 09:48:29 am
138	pruebacorreo	23123132	Casado con sociedad conyugal disuelta y liquidada	pruebacorreo		12312312312	pruebacorreo@pruebacorreo	2019/04/1 10:28:54 am	1		pruebacorreo pruebacorreo	2				Almacenamiento/CertificadoscargadosInformador/pruebacorreo-(01-04-19)-(10.29.16).pdf	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(10.29.16).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(10.29.16).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(10.29.16).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(10.29.16).	Persona Jurídica	Leasing	1312313123			Almacenamiento/CertificadoscargadosNotaria/Subido-Notariapruebacorreo-(01-04-19)-(10.29.16).					No	No	No	No	No			Sin Responder
135	50c-prueba4aaaaaaa	444444444	Soltero sin unión marital de hecho	prueba4		444444444	prueba4@prueba4	2019/03/29 09:49:36 am	2	50c-prueba4bbbbbbbb	prueba4 prueba4 prueba4 prueba4	5				Almacenamiento/CertificadoscargadosInformador/50c-prueba4aaaaaaa-(29-03-19)-(09.50.44).pdf	Almacenamiento/CertificadoscargadosInformador/50c-prueba4bbbbbbbb-(29-03-19)-(09.50.44).pdf	0	50c-prueba4ccccccccccc	Almacenamiento/CertificadoscargadosInformador/50c-prueba4ccccccccccc-(29-03-19)-(09.50.44).pdf		Almacenamiento/CertificadoscargadosInformador/-(29-03-19)-(09.50.44).		Almacenamiento/CertificadoscargadosInformador/-(29-03-19)-(09.50.44).	Persona Jurídica	Hipoteca		200000000	400000000	Almacenamiento/CertificadoscargadosNotaria/Subido-Notaria50c-prueba4aaaaaaa-(29-03-19)-(09.50.44).					No	No	No	No	No			Sin Responder
136	50c-222222	123123123123	Casado con sociedad conyugal vigente	camilo	Nit para personas jurídicas	123123123	camilo@tramiti.com.co	2019/03/29 15:11:47 pm	1		ninguna	2		camilo		Almacenamiento/CertificadoscargadosInformador/50c-222222-(29-03-19)-(15.12.36).pdf	Almacenamiento/CertificadoscargadosInformador/-(29-03-19)-(15.12.36).	0		Almacenamiento/CertificadoscargadosInformador/-(29-03-19)-(15.12.36).		Almacenamiento/CertificadoscargadosInformador/-(29-03-19)-(15.12.36).		Almacenamiento/CertificadoscargadosInformador/-(29-03-19)-(15.12.36).	Persona Natural	Hipoteca		12312312323	121323123	Almacenamiento/CertificadoscargadosNotaria/Subido-Notaria50c-222222-(29-03-19)-(15.12.36).					No	No	No	No	No			Sin Responder
137	pruebagerente	234234234	Casado con sociedad conyugal disuelta y liquidada	asdas	Cédula de extranjería	23424323	asdas@asdasdfasdf	2019/04/1 09:28:58 am	2		sadfasdfasdf	6		dasdasd		Almacenamiento/CertificadoscargadosInformador/pruebagerente-(01-04-19)-(09.29.31).pdf	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(09.29.31).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(09.29.31).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(09.29.31).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(09.29.31).	Persona Natural	Leasing	32424323423			Almacenamiento/CertificadoscargadosNotaria/Subido-Notariapruebagerente-(01-04-19)-(09.29.31).					No	No	No	No	No			Sin Responder
139	pruebacorreo2	32342342	Casado con sociedad conyugal vigente	pruebacorreo2	Cédula de extranjería	1231312312	pruebacorreo2@pruebacorreo2	2019/04/1 10:46:03 am	1		pruebacorreo2 pruebacorreo2	2	pruebacorreo2	pruebacorreo2	pruebacorreo2	Almacenamiento/CertificadoscargadosInformador/pruebacorreo2-(01-04-19)-(10.46.33).	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(10.46.33).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(10.46.33).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(10.46.33).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(10.46.33).	Persona Natural	Leasing	23123123123			Almacenamiento/CertificadoscargadosNotaria/Subido-Notariapruebacorreo2-(01-04-19)-(10.46.33).					No	No	No	No	No			Sin Responder
150	asdasdasd	123123123	Entidad	ASDASD		12312313123123	ADSASDAS@asdASD	2019/04/1 16:27:23 pm	1		ASDADASDASD	2				Almacenamiento/CertificadoscargadosInformador/asdasdasd-(01-04-19)-(16.27.43).	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.27.43).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.27.43).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.27.43).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(16.27.43).	Persona Jurídica	Leasing	123123123123			Almacenamiento/CertificadoscargadosNotaria/Subido-Notariaasdasdasd-(01-04-19)-(16.27.43).					No	No	No	No	No			Sin Responder
151	32236236	236236	Soltero sin unión marital de hecho	prueba	Nit para personas jurídicas	53525	admin@fgdsa	2019/04/3 09:16:29 am	1		wgsdgdsg	2	prueba 	prueba	prueba	Almacenamiento/CertificadoscargadosInformador/32236236-(03-04-19)-(08.17.09).	Almacenamiento/CertificadoscargadosInformador/-(03-04-19)-(08.17.09).	0		Almacenamiento/CertificadoscargadosInformador/-(03-04-19)-(08.17.09).		Almacenamiento/CertificadoscargadosInformador/-(03-04-19)-(08.17.09).		Almacenamiento/CertificadoscargadosInformador/-(03-04-19)-(08.17.09).	Persona Natural	Leasing	5675436236			Almacenamiento/CertificadoscargadosNotaria/Subido-Notaria32236236-(03-04-19)-(08.17.09).					No	No	No	No	No			Sin Responder
152	74574577	3463436346	Casado con sociedad conyugal vigente	CAMILO	Cédula de ciudadanía	1098625584	camilo@gmil.com	2019/04/3 11:14:05 am	1			2	ANDRES	LIZARAZO	LIZARAZO	Almacenamiento/CertificadoscargadosInformador/74574577-(03-04-19)-(10.16.17).	Almacenamiento/CertificadoscargadosInformador/-(03-04-19)-(10.16.17).	0		Almacenamiento/CertificadoscargadosInformador/-(03-04-19)-(10.16.17).		Almacenamiento/CertificadoscargadosInformador/-(03-04-19)-(10.16.17).		Almacenamiento/CertificadoscargadosInformador/-(03-04-19)-(10.16.17).	Persona Natural	Leasing	10000000			Almacenamiento/CertificadoscargadosNotaria/Subido-Notaria74574577-(03-04-19)-(10.16.17).					No	No	No	No	No			Sin Responder
140	pruebacorreo3	12312321312	Entidad	pruebacorreo3	Nit para personas jurídicas	123123213	pruebacorreo3@pruebacorreo3	2019/04/1 10:56:04 am	1		pruebacorreo3 pruebacorreo3 	2		pruebacorreo3		Almacenamiento/CertificadoscargadosInformador/pruebacorreo3-(01-04-19)-(10.56.32).	Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(10.56.32).	0		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(10.56.32).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(10.56.32).		Almacenamiento/CertificadoscargadosInformador/-(01-04-19)-(10.56.32).	Persona Natural	Hipoteca		123123213	231321312	Almacenamiento/CertificadoscargadosNotaria/pruebacorreo3-(10-04-19)-(08.57.29).	Almacenamiento/CertificadoscargadosNotaria/-(10-04-19)-(08.57.29).	Almacenamiento/CertificadoscargadosNotaria/-(10-04-19)-(08.57.29).	Almacenamiento/CertificadoscargadosNotaria/-(10-04-19)-(08.57.29).	Almacenamiento/CertificadoscargadosNotaria/-(10-04-19)-(08.57.29).	No	No	No	No	No	s	 	2019/04/10 09:57:22 am
153	50c-pruebaarchivo1	11111111	Casado con sociedad conyugal vigente	nicolas	Cédula de extranjería	1018494558	nicolas970329@gmail.com	2019/04/10 09:45:33 am	1	50c-pruebaarchivo2	ninguna 	2	andres	lopez	lopez	Almacenamiento/CertificadoscargadosInformador/50c-pruebaarchivo1-(10-04-19)-(08.47.34).pdf	Almacenamiento/CertificadoscargadosInformador/50c-pruebaarchivo2-(10-04-19)-(08.47.34).pdf	0	50c-pruebaarchivo3	Almacenamiento/CertificadoscargadosInformador/50c-pruebaarchivo3-(10-04-19)-(08.47.34).pdf		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(08.47.34).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(08.47.34).	Persona Natural	Leasing	200000000			Almacenamiento/CertificadoscargadosNotaria/50c-pruebaarchivo1-(10-04-19)-(08.57.59).	Almacenamiento/CertificadoscargadosNotaria/50c-pruebaarchivo2-(10-04-19)-(08.57.59).	Almacenamiento/CertificadoscargadosNotaria/50c-pruebaarchivo3-(10-04-19)-(08.57.59).	Almacenamiento/CertificadoscargadosNotaria/-(10-04-19)-(08.57.59).	Almacenamiento/CertificadoscargadosNotaria/-(10-04-19)-(08.57.59).	No	No	No	No	No	n	 	2019/04/10 09:57:51 am
154	prueba10abril	1010101010	Soltero sin unión marital de hecho	prueba10abril	Cédula de extranjería	10101010	prueba10abril@prueba10abril	2019/04/10 11:21:07 am	2		prueba10abril	5		prueba10abril		Almacenamiento/CertificadoscargadosInformador/prueba10abril-(10-04-19)-(10.21.42).pdf	Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(10.21.42).	0		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(10.21.42).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(10.21.42).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(10.21.42).	Persona Natural	Hipoteca		300000000	200000000	Almacenamiento/CertificadoscargadosNotaria/Subido-Notariaprueba10abril-(10-04-19)-(10.21.42).					No	No	No	No	No			Sin Responder
155	658476343	5473473	Casado con sociedad conyugal disuelta y liquidada	CAMILO	Cédula de ciudadanía	7687456325	camilo2@tramiti2.com.co	2019/04/10 12:23:21 pm	1		ewgtewtwetwe	2		LIZARAZO		Almacenamiento/CertificadoscargadosInformador/658476343-(10-04-19)-(11.24.32).	Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.24.32).	0		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.24.32).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.24.32).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.24.32).	Persona Natural	Leasing	567345734			Almacenamiento/CertificadoscargadosNotaria/Subido-Notaria658476343-(10-04-19)-(11.24.32).					No	No	No	No	No			Sin Responder
156	45734636	47347234	Casado con sociedad conyugal vigente	camilo	Cédula de extranjería	4362423623	admin2@kalsolucionesweb.net	2019/04/10 12:28:36 pm	1		reyeyewy	2		lizarazo		Almacenamiento/CertificadoscargadosInformador/45734636-(10-04-19)-(11.29.18).	Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.29.18).	0		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.29.18).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.29.18).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.29.18).	Persona Natural	Leasing	457357347			Almacenamiento/CertificadoscargadosNotaria/Subido-Notaria45734636-(10-04-19)-(11.29.18).					No	No	No	No	No			Sin Responder
157	63433262	236236	Entidad	PEPO	Nit para personas jurídicas	352362	admin2@kalsolucionesweb.net	2019/04/10 12:31:43 pm	1		gwetwetwet	2		NUÑEZ		Almacenamiento/CertificadoscargadosInformador/63433262-(10-04-19)-(11.32.28).	Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.32.28).	0		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.32.28).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.32.28).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.32.28).	Persona Natural	Leasing	34737347			Almacenamiento/CertificadoscargadosNotaria/Subido-Notaria63433262-(10-04-19)-(11.32.28).					No	No	No	No	No			Sin Responder
158	dadadasdasdasd	1321231231	Entidad	asdads	Cédula de extranjería	123123123123	asdasda@adasdad	2019/04/10 12:38:10 pm	2		qweqweqwe	5		asdasdasd		Almacenamiento/CertificadoscargadosInformador/dadadasdasdasd-(10-04-19)-(11.38.30).	Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.38.30).	0		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.38.30).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.38.30).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.38.30).	Persona Natural	Hipoteca		123123123	12123123	Almacenamiento/CertificadoscargadosNotaria/Subido-Notariadadadasdasdasd-(10-04-19)-(11.38.30).					No	No	No	No	No			Sin Responder
159	szdfszdf	12312312321	Entidad	fasdf	Nit para personas jurídicas	234234234	asda@asdasdasd	2019/04/10 12:44:36 pm	2		sadasd	5		asdfsadf		Almacenamiento/CertificadoscargadosInformador/szdfszdf-(10-04-19)-(11.44.55).	Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.44.55).	0		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.44.55).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.44.55).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.44.55).	Persona Natural	Leasing	231123123			Almacenamiento/CertificadoscargadosNotaria/Subido-Notariaszdfszdf-(10-04-19)-(11.44.55).					No	No	No	No	No			Sin Responder
160	1213435345345	23424234234	Entidad	sdfsdfs	Cédula de extranjería	234234234	sdfsd@sdsfsfd	2019/04/10 12:50:07 pm	2		sfdsdfsd	5		dfsdf		Almacenamiento/CertificadoscargadosInformador/1213435345345-(10-04-19)-(11.50.26).	Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.50.26).	0		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.50.26).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.50.26).		Almacenamiento/CertificadoscargadosInformador/-(10-04-19)-(11.50.26).	Persona Natural	Leasing	234234234			Almacenamiento/CertificadoscargadosNotaria/Subido-Notaria1213435345345-(10-04-19)-(11.50.26).					No	No	No	No	No			Sin Responder
\.


--
-- Data for Name: sucursal; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sucursal (idsucursal, nombre, direccion, fk_identidad) FROM stdin;
1	Notaria	Notaria	1
2	sucursal prueba	sucursal prueba	1
3	Inmobiliaria	Inmobiliaria	2
\.


--
-- Data for Name: test; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.test (idnotaria, "Nombresnotaria", "NumeroDocumentonotaria", "CorreoElectroniconotaria", "fk_idUsuario", fk_idsucursal, "idUsuario", "Usuario", "Contrasena", "Rol", "Estados") FROM stdin;
\.


--
-- Name: Usuario_idUsuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."Usuario_idUsuario_seq"', 9, true);


--
-- Name: autorizacion_idautorizacion_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.autorizacion_idautorizacion_seq', 75, true);


--
-- Name: entidad_identidad_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.entidad_identidad_seq', 2, true);


--
-- Name: informacion_idinformacion_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.informacion_idinformacion_seq', 1, false);


--
-- Name: notaria_fk_idUsuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."notaria_fk_idUsuario_seq"', 1, false);


--
-- Name: notaria_fk_idsucursal_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.notaria_fk_idsucursal_seq', 1, false);


--
-- Name: notaria_idnotaria_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.notaria_idnotaria_seq', 8, true);


--
-- Name: preguntascomunes_idpreguntas_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.preguntascomunes_idpreguntas_seq', 1, false);


--
-- Name: simuladorleasing_fk_idsolicitud_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.simuladorleasing_fk_idsolicitud_seq', 1, false);


--
-- Name: simuladorleasing_idsimuladorleasing_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.simuladorleasing_idsimuladorleasing_seq', 1, true);


--
-- Name: solicitud_fk_idautorizacion_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.solicitud_fk_idautorizacion_seq', 1, false);


--
-- Name: solicitud_fk_idnotaria_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.solicitud_fk_idnotaria_seq', 1, false);


--
-- Name: solicitud_idsolicitud_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.solicitud_idsolicitud_seq', 160, true);


--
-- Name: sucursal_fk_identidad_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sucursal_fk_identidad_seq', 1, false);


--
-- Name: sucursal_idsucursal_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sucursal_idsucursal_seq', 3, true);


--
-- Name: Usuario Usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Usuario"
    ADD CONSTRAINT "Usuario_pkey" PRIMARY KEY ("idUsuario");


--
-- Name: autorizacion autorizacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.autorizacion
    ADD CONSTRAINT autorizacion_pkey PRIMARY KEY (idautorizacion);


--
-- Name: entidad entidad_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.entidad
    ADD CONSTRAINT entidad_pkey PRIMARY KEY (identidad);


--
-- Name: informacion informacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.informacion
    ADD CONSTRAINT informacion_pkey PRIMARY KEY (idinformacion);


--
-- Name: notaria notaria_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.notaria
    ADD CONSTRAINT notaria_pkey PRIMARY KEY (idnotaria);


--
-- Name: preguntascomunes preguntascomunes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.preguntascomunes
    ADD CONSTRAINT preguntascomunes_pkey PRIMARY KEY (idpreguntas);


--
-- Name: simuladorleasing simuladorleasing_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.simuladorleasing
    ADD CONSTRAINT simuladorleasing_pkey PRIMARY KEY (idsimuladorleasing);


--
-- Name: solicitud solicitud_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.solicitud
    ADD CONSTRAINT solicitud_pkey PRIMARY KEY (idsolicitud);


--
-- Name: sucursal sucursal_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sucursal
    ADD CONSTRAINT sucursal_pkey PRIMARY KEY (idsucursal);


--
-- PostgreSQL database dump complete
--

