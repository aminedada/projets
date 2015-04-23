-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Ven 27 Février 2015 à 14:16
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `inno_cube`
--

-- --------------------------------------------------------

--
-- Structure de la table `forumlaire`
--

CREATE TABLE `forumlaire` (
`id` int(30) NOT NULL,
  `question` varchar(255) NOT NULL,
  `reponse` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `forumlaire`
--

INSERT INTO `forumlaire` (`id`, `question`, `reponse`) VALUES
(1, 'Dans quel secteur d''activité se situe votre organisation ?', 'Secteur Public\r\nInformatique / Télécoms\r\nService / Tertiaire  \r\nBanque / Assurance   \r\nIndustrie    \r\nÉducation   \r\nSanté    \r\nBTP / Transports  \r\nAutomobile / Aéronautique'),
(2, 'Quel est l''effectif de votre entreprise ?', 'Plus de 1000\r\nEntre 500 et 1 000\r\nEntre 250 et 500\r\nEntre 50 et 250\r\nMoins de 50'),
(3, 'Quelle est votre fonction ?', 'Responsable Informatique\r\nResponsable Infrastructure (système, production,réseau…)\r\nChef de projet/Consultant\r\nDirecteur Informatique / DSI\r\nResponsable Métier'),
(4, 'Quel est l''effectif des équipes informatiques en interne ?', 'Plus de 100 personnes\r\nDe 51 à 100 personnes\r\nDe 11 à 50 personnes\r\nDe 5 à 10 personnes\r\nMoins de 5 personnes'),
(5, 'Quand vous considérez une nouvelle solution, que regardez vous en premier ?', 'Logiciel Libre\r\nLogiciel propriétaire\r\nLe leader du marché\r\nCela dépend des circonstances'),
(6, 'Depuis quand des solutions Open Source ont été mises en place dans votre organisation ?', 'Entre 5 et 10 ans\r\nDepuis plus de 10 ans\r\nEntre 2 et 5 ans\r\nPas de solutions Open\r\nSource installées'),
(7, 'Si oui, pour du Server ou du Desktop ?', 'Desktop\r\nServer'),
(8, 'Parmi cette sélection d''éditeurs de solutions Open Source, quels sont les plus reconnus ?', 'MySQL\r\nRed Hat Entreprise\r\nGoogle\r\nIBM\r\nAlfresco\r\nTalend\r\nCanonical\r\nWordpress\r\nAcquia/Joomla\r\nAttachmate SuSE\r\nAutre\r\nIngres\r\nNuxeo\r\nBonitaSoft\r\nEnterpriseDB\r\nCobol-IT\r\neXo'),
(9, 'Votre entreprise a-t-elle défini une stratégie Open Source ?', 'Non\r\nOui\r\nEn cours de mise en place'),
(10, 'A votre avis, quels sont les principaux avantages de l''Open Source (3 réponses max.) ?', 'Sécurité accrue\r\nSimplicité de déploiement\r\nComposants réutilisables\r\nPerformance\r\nInnovation\r\nÉvolutivité / Agilité\r\nCommunauté\r\nIndépendance Technique\r\nCoûts'),
(11, 'À votre avis, quels sont les principales zones d’amélioration de l''Open Source ?', 'Suivi commercial client\r\nManque de compétences ...\r\nQualité des produits (stabilité)\r\nCompatibilité des différentes ...\r\nManque de Support\r\nCompatibilité/certification avec ...\r\nPas de « Roadmap » Produit'),
(12, 'Quelle est la politique de votre entreprise vis-à-vis de la communauté Open Source ?', 'Consultation d''information\r\nÉchange d''information et contribution\r\nParticipation proactive au développement de l''Open-Source\r\nReversement des développements à la communauté'),
(13, 'Comment gérez-vous les développements de vos applications Open Source ?', 'Avec une approche mixte (équipe en interne / sous-traitance en externe)\r\n100% avec vos équipes en interne\r\n100% en sous-traitance avec des'),
(14, 'Quels avantages tirez-vous de votre participation à des projets Open Source ?', 'Coûts de développement réduits\r\nCoûts de support réduits\r\nAdéquation avec les valeurs de l''entreprise\r\nAvantage compétitif\r\nLa possibilité d''influencer des projets\r\nLe recrutement de personnes de talent\r\nUne image publique positive\r\nAutre (spécifier)\r\nAuc'),
(15, 'Quelles utilisations/applications sont les plus adaptées à l''Open Source ?', 'Suite Bureautique\r\nServeur de Stockage\r\nOS Desktop/serveur\r\nMiddleware (Java/BPM/SOA)\r\nHébergement/Création de sites\r\nDéveloppement applications métier\r\nCloud\r\nBase de Données\r\nAdministration Systèmes/réseaux'),
(16, 'Quelles utilisations/applications sont les plus adaptées à l''Open Source ?', 'Hébergement/Création de sites\r\nAdministration Systèmes/réseaux\r\nBase de Données\r\nMiddleware (Java/BPM/SOA)\r\nOS Desktop/serveur\r\nServeur de Stockage\r\nCloud\r\nDéveloppement applications métier\r\nSuite Bureautique'),
(17, 'Pour vos dépenses logicielles en 2014, quelle est la part de ceux acquis en Open Source ?', 'Moins de 10%\r\nEntre 10 et 30%\r\nEntre 30 et 50%\r\nAucune'),
(18, 'Quelle est la tendance pour 2015 pour les dépenses logicielles en Open Source ?', 'Stable\r\nA la hausse\r\nA la baisse'),
(19, 'Dans les 6 prochains mois, avez-vous des projets Open Source dans ces domaines ?', 'Déploiement de stockage sécurisé\r\nDéploiement d''infrastructure Cloud\r\nMigrations d''applications existantes\r\nMigrations de systèmes d''exploitation\r\nDéveloppement d''applications d''entreprise\r\nVirtualisation'),
(20, 'Quels sont les fournisseurs que vous consultez en priorité pour vos projets Open Source ?', 'Fournisseur/intégrateur de service type SSII\r\nEditeur Logiciel Open Source d''Entreprise avec des offres de plateforme globale\r\nPas de sous-traitance – service fourni par les équipe internes');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `forumlaire`
--
ALTER TABLE `forumlaire`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `forumlaire`
--
ALTER TABLE `forumlaire`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
