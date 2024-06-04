
CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `matricula` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `acesso` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


INSERT INTO `aluno` (`nome`, `email`, `cpf`, `matricula`, `senha`, `id_usuario`, `acesso`) VALUES
('Marta', 'martaBrasil@fut.com.br', '101.010.101-01', '202457819010', '$2y$10$SVAPnSCMkejEWotxpLs54.IWbFhRteNSiLxV/CtzvNkhGiRCwYYMC', 25, 'Sim'),
('Neymar Jr', 'neyJR10@brasa.com.br', '696.969.696-96', '202458108047', '$2y$10$1IkjpAR5ESxH570.emOqxuvSiYZ837h/7JQXksH1kv3Srx95P7JSW', 25, 'Não'),
('Vinicius Junior', 'viniMalvadao@brasil.com.br', '888.888.888-88', '202481458631', '$2y$10$CPlU5dxIU8/qjOSJ8DhApugp1Pd459yig/U5o2RoZM4bcu6.cIa/u', 25, 'Não'),
('Ronaldinho Gaúcho', 'roroGau10@hotmail.com.br', '444.444.444-44', '202487014232', '$2y$10$rsCvZlQeQM.PGP7MbULNLORnuU9ov8nK8jy6ez7/rYweH/EOSHeBO', 25, 'Sim'),


CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `usuario` (`nome`, `email`, `cpf`, `senha`) VALUES
('Usuario', 'usuario@gmail.com.br', '000.000.000-01', '$2y$10$6T2UzEMcTjyP8jeGNs7m1.GUZ6Je8XJOt3dPAa0OqS/GUR43dyLrG');


ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  ADD UNIQUE KEY `matricula_UNIQUE` (`matricula`),
  ADD KEY `fk_aluno_usuario_idx` (`id_usuario`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`);

ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;


ALTER TABLE `aluno`
  ADD CONSTRAINT `fk_aluno_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `db_dev`.`usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

