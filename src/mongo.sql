db.achat.insertMany([{
    client:{_id:1,nom:'achraf',ville:'casablanca'},
    cammandes:[
        {_id:2,date:new Date('11/05/2022'),products:[
            {_id:3,nom:'pc i5',prix:120,categorie:'cat1',qte:2},
            {_id:4,nom:'tv',prix:50,categorie:'cat2',qte:0},
            {_id:5,nom:'football',prix:70,categorie:'cat3',qte:4},
        ]}
        
    ]},
    {
    client:{_id:2,nom:'ahmed',ville:'fes'},
    cammandes:[
        {_id:3,date:new Date('25/02/2023'),products:[
            {_id:5,nom:'ball',prix:70,categorie:'cat3',qte:2},
            {_id:6,nom:'tv',prix:50,categorie:'cat2',qte:10},
        ]}
        
    ]},
    {
    client:{_id:3,nom:'mohamed',ville:'rabat'},
    cammandes:[
        {_id:2,date:new Date('02/14/2023'),products:[
            {_id:7,nom:'tennis',prix:120,categorie:'cat1',qte:2},
            {_id:8,nom:'tv',prix:10,categorie:'cat2',qte:12},
        ]}
        
    ]}
    
    ])
    db.achat.aggregate([
        {
            $group:{
                _id:'$client.ville',
                nombre:{$count : {}},
            },
        },
    ]
    )


    db.achat.aggregate([
        {$match:{"client.nom":'ahmed'}},
        {$unwind:'$cammandes'},
        {$unwind:'$cammandes.produit'},
        {$group:{_id:'$client.nom',
            totaldepo:{$sum:{$mul:['$cammandes.products.qte','$cammandes.products.prix']}}
        }}
    ])

******


1 db.achat.aggregate([
  {
    $unwind: "$cammandes"
  },
  {
    $unwind: "$cammandes.products"
  },
  {
    $match: {"cammandes.products.categorie": "cat1"}
  },
  {
   $inc : {"cammandes.products.prix":10}
  },
  {
    $group: {
      _id: "$_id",
      client: '$client.nom',
      
    }
  },
])


2  db.achat.aggregate([
  {
    $match: {"client.ville": "casablanca"}
  },
  {
    $unwind: "$cammandes"
  },
  {
    $unwind: "$cammandes.products"
  },
  {
    $inc:{cammandes.products.prix : 150}
  },
  {
    $group: {
      _id: "$client.nom",
    }
  },
  
])

3  db.achat.aggregate([
  {
    $match: {"client._id": 2}
  },
  {
    $addFields: {
      newProduct: {
        _id: 6,
        nom: "nouveau produit",
        prix: 50,
        categorie: "cat4",
        qte: 1
      }
    }
  },
])

4  db.achat.updateOne(
  {"client._id": 3},
  {$push: {
    "cammandes": {
      _id: 7,
      date: new Date('2023-02-14'),
      products: [{_id:7,nom:'tennis',prix:120,categorie:'cat1',qte:2}]
    }
  }}
)