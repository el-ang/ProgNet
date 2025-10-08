CREATE DATABASE IF NOT EXISTS kampus;
USE kampus;
CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20),
    nama VARCHAR(50),
    prodi VARCHAR(50)
);
CREATE TABLE IF NOT EXISTS nilai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mahasiswa_id INT NOT NULL,
    mata_kuliah VARCHAR(50) NOT NULL,
    sks TINYINT NOT NULL,
    nilai_huruf ENUM("A","B","C","D","E") NOT NULL,
    nilai_angka DECIMAL(3,2) NOT NULL,
    FOREIGN KEY (mahasiswa_id) REFERENCES mahasiswa(id) ON DELETE CASCADE
);