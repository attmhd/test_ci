# Publikasi API

REST API menggunakan CI4 dan Mysql

## Version: 1.0.0

### /artikels

#### GET

##### Summary:

Get Artikels

##### Description:

### Request

This is an HTTP GET request to fetch data for articles from the server.

#### Request Body

The request does not contain a request body.

### Response

The server returns a JSON array with the following structure:

- `id_artikel` (string): The ID of the article.
- `judul_artikel` (string): The title of the article.

Example response:

```json
[
  {
    "id_artikel": " Art00018",
    "judul_artikel": "Ubah Data"
  },
  {
    "id_artikel": "Art0001",
    "judul_artikel": "Perancangan UI/UX Pada Aplikasi Pelayanan Desa Igirklanceng Menggunakan Metode Desain Thinking"
  },
  {
    "id_artikel": "Art00010",
    "judul_artikel": "PERANCANGAN SISTEM PEMANTAUAN LOKASI DAN KOMUNIKASI DALAM SATU APLIKASI"
  },
  {
    "id_artikel": "Art00011",
    "judul_artikel": "PENERAPAN METODE SIMPLE ADDITIVE WEIGHTING \r\nDALAM PENENTUAN REKOMENDASI KARYAWAN SUATU PEKERJAAN PENGEMBANGAN PERANGKAT LUNAK"
  },
  {
    "id_artikel": "Art00012",
    "judul_artikel": "PEMBANGUNAN SISTEM INFORMASI MONITORING PEKERJAAN KONSTRUKSI PADA DINAS PENDIDIKAN KABUPATEN LABUHANBATU BERBASIS WEB"
  },
  {
    "id_artikel": "Art00013",
    "judul_artikel": "PENGEMBANGAN APLIKASI DKM REGISTRATION SYSTEM BERBASIS WEB MENGGUNAKAN METODE WATERFALL"
  },
  {
    "id_artikel": "Art00014",
    "judul_artikel": "TOPIC ANALYSIS VIDEO DEBAT JELANG PEMILU PRESIDEN DAN WAKIL PRESIDEN TAHUN 2024"
  },
  {
    "id_artikel": "Art00015",
    "judul_artikel": "MANAJEMEN BANDWIDTH MENGGUNAKAN METODEQUEUETREEPADA PT. MINDREACH CONSULTING"
  },
  {
    "id_artikel": "Art00016",
    "judul_artikel": "ANALYSIS OF OPAC SATISFACTION LEVEL IN POLITEKNIK KESELAMATAN TRANSPORTASI JALAN LIBRARY WITH PIECES FRAMEWORK"
  },
  {
    "id_artikel": "Art00017",
    "judul_artikel": "IMPLEMENTASI SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN ALAT KONTRASEPSI DENGAN METODE AHP DAN TOPSIS (STUDI KASUS DI PUSKESMAS GUNUNG LABU)"
  },
  {
    "id_artikel": "Art00019",
    "judul_artikel": "test api ci4"
  },
  {
    "id_artikel": "Art0002",
    "judul_artikel": "ANALISIS ESTIMASI BIAYA PERANGKAT LUNAK MENGGUNAKAN COCOMO II"
  },
  {
    "id_artikel": "Art00020",
    "judul_artikel": "test lagi api ci4"
  },
  {
    "id_artikel": "Art00021",
    "judul_artikel": "test lagi lagi api ci4"
  },
  {
    "id_artikel": "Art00022",
    "judul_artikel": "test update"
  },
  {
    "id_artikel": "Art00023",
    "judul_artikel": "test param"
  },
  {
    "id_artikel": "Art00024",
    "judul_artikel": "test param"
  },
  {
    "id_artikel": "Art0003",
    "judul_artikel": "PEMBANGUNAN SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN PRODUK INVESTASI KEUANGAN MENGGUNAKAN METODE FUZZY MULTI ATTRIBUTE DECISION MAKING MODEL YAGER "
  },
  {
    "id_artikel": "Art0004",
    "judul_artikel": "PENERAPAN SISTEM PENDUKUNG KEPUTUSAN DALAM MENENTUKAN PRIORITAS LOKASI PEMASARAN PADA PT. ASKRINDO CABANG MEDAN MENGGUNAKAN METODE AHP DAN PROMETHEE "
  },
  {
    "id_artikel": "Art0005",
    "judul_artikel": "MACHINE ANALISIS SENTIMEN OPINI PUBLIK TERHADAP HASHTAG #JULIDFIISABILILLAH DI TWITTER MENGGUNAKAN METODE SUPPORT VECTOR"
  },
  {
    "id_artikel": "Art0006",
    "judul_artikel": "REKAYASA PERANGKAT LUNAK PEMESANAN TIKET BIOSKOP BERBASIS WEB"
  },
  {
    "id_artikel": "Art0007",
    "judul_artikel": "APLIKASI KAMUS BAHASA MELAYU SUMATERA UTARA BERBASIS ANDROID SEBAGAI MEDIA BELAJAR MASYARAKAT DENGAN PENERAPAN SPEECH TO TEXT "
  },
  {
    "id_artikel": "Art0008",
    "judul_artikel": "RANCANG BANGUN SISTEM INFORMASI PELATIHAN PADA BALAI DIKLAT INDUSTRI (BDI) PADANG BERBASIS MOBILE APPLICATION MENGGUNAKAN API"
  }
]
```

##### Responses

| Code | Description         |
| ---- | ------------------- |
| 200  | Successful response |

#### POST

##### Summary:

Add data artikel

##### Description:

### Add New Artikel

This endpoint allows you to create a new artikel with the specified artikel ID and title.

#### Request Body

- `id_artikel` (string, required): The ID of the artikel.
- `judul_artikel` (string, required): The title of the artikel.

#### Response

Upon successful creation, the server responds with a status code of 201 and a JSON object containing:

- `status` (number): Indicates the status of the operation.
- `error` (string): An error message, if any.
- `message.success` (string): A success message, if any.
- `message.data.id_artikel` (string): The ID of the newly created artikel.
- `message.data.judul_artikel` (string): The title of the newly created artikel.

```json
{
  "status": 201,
  "error": null,
  "message": {
    "success": "Artikel berhasil ditambahkan",
    "data": {
      "id_artikel": "Art00025",
      "judul_artikel": "test create"
    }
  }
}
```

##### Parameters

| Name          | Located in | Description | Required | Schema |
| ------------- | ---------- | ----------- | -------- | ------ |
| id_artikel    | query      |             | No       | string |
| judul_artikel | query      |             | No       | string |

##### Responses

| Code | Description         |
| ---- | ------------------- |
| 200  | Successful response |

### /artikels/Art00022

#### GET

##### Summary:

Get Artikel by ID

##### Description:

### GET /artikels/Art00022

This endpoint is used to retrieve data for a specific artikel with the ID "Art00022".

#### Response

```json
[
  {
    "id_artikel": "Art00022",
    "judul_artikel": "test update"
  }
]
```

The request retrieves data for the artikel with the ID "Art00022" and includes a request body with the ID and title of another artikel. The response returns an array of artikel data with empty values for ID and title.

##### Responses

| Code | Description         |
| ---- | ------------------- |
| 200  | Successful response |

#### DELETE

##### Summary:

Delete Artikel

##### Description:

### Delete Artikel

Deletes the artikel with the specified ID.

#### Request Body

This request does not require a request body.

#### Response Body

The response is in JSON format and follows the schema below:

```json
{
  "status": 200,
  "error": null,
  "message": {
    "success": "Artikel berhasil dihapus",
    "data": {
      "id_artikel": "Art00022",
      "judul_artikel": "test update"
    }
  }
}
```

##### Responses

| Code | Description         |
| ---- | ------------------- |
| 200  | Successful response |

#### PUT

##### Summary:

Update Artikel

##### Description:

The endpoint sends an HTTP PUT request to update the article with ID "Art00022" and sets the title to "test".

### Response

The response is a JSON object with the following schema:

```json
{
  "status": 200,
  "error": null,
  "message": {
    "success": "Artikel berhasil diupdate",
    "data": {
      "judul_artikel": "test update"
    }
  }
}
```

##### Parameters

| Name          | Located in | Description | Required | Schema |
| ------------- | ---------- | ----------- | -------- | ------ |
| judul_artikel | query      |             | No       | string |

##### Responses

| Code | Description         |
| ---- | ------------------- |
| 200  | Successful response |

### /users

#### GET

##### Summary:

Get Users

##### Description:

### Retrieve Users

This endpoint makes an HTTP GET request to retrieve a list of users.

#### Request

The request does not require any specific parameters.

#### Response

The response will be in JSON format with the following schema:

```json
[
  {
    "iduser": "U001",
    "namauser": "Yelnovri",
    "username": "admin",
    "password": "admin",
    "level": "superuser"
  },
  {
    "iduser": "U002",
    "namauser": "luoyii",
    "username": "pimpinan",
    "password": "pimpinan",
    "level": "pimpinan"
  }
]
```

The response will contain an array of user objects, where each user object will have the following properties:

- `iduser` (string): The unique identifier of the user.
- `namauser` (string): The name of the user.
- `username` (string): The username of the user.
- `password` (string): The password of the user.
- `level` (string): The level of the user.

##### Responses

| Code | Description         |
| ---- | ------------------- |
| 200  | Successful response |

### /users/U002

#### GET

##### Summary:

Get User by ID

##### Description:

## Request

This endpoint makes an HTTP GET request to retrieve the details of a specific user with the provided user ID.

## Response

The response is in JSON format and returns an array of user objects. Each user object contains the following properties:

- `iduser` (string): The unique identifier of the user.
- `namauser` (string): The name of the user.
- `username` (string): The username of the user.
- `password` (string): The password of the user.
- `level` (string): The level or role of the user.

### JSON Schema

```json
[
  {
    "iduser": "U002",
    "namauser": "luoyii",
    "username": "pimpinan",
    "password": "pimpinan",
    "level": "pimpinan"
  }
]
```

##### Responses

| Code | Description         |
| ---- | ------------------- |
| 200  | Successful response |

### /login

#### GET

##### Summary:

Login

##### Responses

| Code | Description         |
| ---- | ------------------- |
| 200  | Successful response |

#### POST

##### Summary:

Autentikasi

##### Parameters

| Name         | Located in | Description | Required | Schema |
| ------------ | ---------- | ----------- | -------- | ------ |
| Content-Type | header     |             | No       | string |

##### Responses

| Code | Description         |
| ---- | ------------------- |
| 200  | Successful response |
