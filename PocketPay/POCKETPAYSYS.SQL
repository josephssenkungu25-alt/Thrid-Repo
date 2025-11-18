CREATE DATABASE IF NOT EXISTS POCKETPAYSYS;
USE POCKETPAYSYS;

DROP TABLE IF EXISTS About;
DROP TABLE IF EXISTS BENEFITS;
DROP TABLE IF EXISTS IMAGES;
DROP TABLE IF EXISTS KEYFEATURES;
DROP TABLE IF EXISTS SYSTEMFEATURES;
DROP TABLE IF EXISTS IMPLEMENTATION;
DROP TABLE IF EXISTS SECURITYFEATURES;

CREATE TABLE About(
    AboutUS VARCHAR(500) NOT NULL
);

CREATE TABLE BENEFITS(
    Benefit VARCHAR(50) PRIMARY KEY,
    Explanation VARCHAR(500) NOT NULL
);

CREATE TABLE IMAGES(
    ImageID INT AUTO_INCREMENT PRIMARY KEY,
    Image LONGBLOB
);

CREATE TABLE KEYFEATURES(
    FeatureID VARCHAR(20) PRIMARY KEY,
    Feature VARCHAR(500) NOT NULL
);

CREATE TABLE SYSTEMFEATURES(
    FeatureID VARCHAR(20) PRIMARY KEY,
    Feature VARCHAR(500) NOT NULL
);

CREATE TABLE IMPLEMENTATION(
    ImplementationID VARCHAR(100) PRIMARY KEY
);

CREATE TABLE SECURITYFEATURES(
    SecurityFeatureID VARCHAR(20) PRIMARY KEY,
    Feature VARCHAR(500) NOT NULL
);


INSERT INTO About (AboutUS)
VALUES (
    'PocketPaySys is a digital payment and financial management system designed to streamline transactions, improve accountability, enhance security, and promote efficiency in service delivery.'
);


INSERT INTO BENEFITS (Benefit, Explanation) VALUES
('Convenience', 'PocketPaySys allows users to make payments anytime and anywhere without the need for physical cash.'),
('Cost Reduction', 'The system reduces administrative and operational costs by automating payment processes.'),
('Transparency', 'All transactions are recorded digitally, improving accountability and reducing fraud.'),
('Security', 'Secure authentication and encrypted transactions protect user data and financial information.'),
('Efficiency', 'Automated processes reduce delays and improve overall transaction speed.');
