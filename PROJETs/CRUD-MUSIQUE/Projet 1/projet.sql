DROP DATABASE IF EXISTS `Projet`;
CREATE DATABASE IF NOT EXISTS `Projet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `Projet`;
-- --------------------------------------------------------

--
-- Structure de la table `Artistes`
--

CREATE TABLE `Artistes` (
  `code_artiste` int(11) NOT NULL,
  `nom_artiste` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_artiste` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Artistes`
--

INSERT INTO `Artistes` (`code_artiste`, `nom_artiste`, `prenom_artiste`, `password`) VALUES
(1, 'lulu', 'lolo', '$2y$10$TKN6IHvquGIpV.yECEmgJudm1l1VRs5kZs4xTuq7b/2I0jhFGDygu'),
(2, 'lulu', 'lolo', '$2y$10$bZiPsjWwMUfOglMrpli/Kuczga4cUzHgnznQ3sAKRzKBmxroHITSa'),
(3, 'test', 'test', '$2y$10$atG36FgiTZQ2YEgkjbxDUuBHkrwio6TrECMYinX3yUyegWRtvJM.i'),
(4, 'tuitot', 'erer', '$2y$10$hYMMVUvSUglsXf0THCKRGOj4E.xStUw7uCU2NIn5pEEqqvhDQlt46'),
(5, 'tuitot', 'erer', '$2y$10$h1iiAHaiLBQYDfpKcrZrmeFweZ4rcuo6DpL33dfrZlvbfNV1PH4/u'),
(6, 'walid', 'walid', '$2y$10$B.dE4eDGgi4SatPIGZcHnev9wAbm2wIvXr4vFQDY9ZnkbasEhUg2K');

-- --------------------------------------------------------

--
-- Structure de la table `Disques`
--

CREATE TABLE `Disques` (
  `code_disque` int(11) NOT NULL,
  `titre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_label` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Labels`
--

CREATE TABLE `Labels` (
  `code_label` int(11) NOT NULL,
  `nom_label` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `y_participe`
--

CREATE TABLE `y_participe` (
  `code_artiste` int(11) NOT NULL,
  `code_disque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Artistes`
--
ALTER TABLE `Artistes`
  ADD PRIMARY KEY (`code_artiste`);

--
-- Index pour la table `Disques`
--
ALTER TABLE `Disques`
  ADD PRIMARY KEY (`code_disque`),
  ADD KEY `Disques_Labels_FK` (`code_label`);

--
-- Index pour la table `Labels`
--
ALTER TABLE `Labels`
  ADD PRIMARY KEY (`code_label`);

--
-- Index pour la table `y_participe`
--
ALTER TABLE `y_participe`
  ADD PRIMARY KEY (`code_artiste`,`code_disque`),
  ADD KEY `y_participe_Disques0_FK` (`code_disque`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Artistes`
--
ALTER TABLE `Artistes`
  MODIFY `code_artiste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Disques`
--
ALTER TABLE `Disques`
  MODIFY `code_disque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Labels`
--
ALTER TABLE `Labels`
  MODIFY `code_label` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Disques`
--
ALTER TABLE `Disques`
  ADD CONSTRAINT `Disques_Labels_FK` FOREIGN KEY (`code_label`) REFERENCES `Labels` (`code_label`);

--
-- Contraintes pour la table `y_participe`
--
ALTER TABLE `y_participe`
  ADD CONSTRAINT `y_participe_Artistes_FK` FOREIGN KEY (`code_artiste`) REFERENCES `Artistes` (`code_artiste`),
  ADD CONSTRAINT `y_participe_Disques0_FK` FOREIGN KEY (`code_disque`) REFERENCES `Disques` (`code_disque`);
