DELETE FROM jalon;
ALTER TABLE jalon auto_increment=1;

insert into jalon(
    jalon_titre,
    jalon_image ,
    jalon_resume ,
    jalon_debut ,
    jalon_fin ) values
    ("Faire le cahier des charges", -- titre
    "cahier_des_charges.jpg", -- nom image
    "On a fait le cahier des charges", -- resume/description
    "22 octobre", -- date de début puis fin
    "9 novembre"
    ),
    ("Regarder l'état de la salle", -- titre
    "ordinateur.jpg", -- nom image
    "On a regardé l'état de la salle", -- resume/description
    "12 novembre", -- date de début puis fin
    "17 décembre"
    ) 
    ;
