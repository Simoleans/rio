<?php

use Illuminate\Database\Seeder;

class ComunasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //primera region-------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 1,
          'comuna' => 'ALTO HOSPICIO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 1,
          'comuna' => 'CAMIÑA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 1,
          'comuna' => 'COLCHANE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 1,
          'comuna' => 'IQUIQUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 1,
          'comuna' => 'HUARA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 1,
          'comuna' => 'PICA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 1,
          'comuna' => 'POZO ALMONTE',
      ]);
      //segunda region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 2,
          'comuna' => 'ANTOFAGASTA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 2,
          'comuna' => 'MARÍA ELENA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 2,
          'comuna' => 'SIERRA GORDA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 2,
          'comuna' => 'TALTAL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 2,
          'comuna' => 'CALAMA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 2,
          'comuna' => 'OLLAGÜE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 2,
          'comuna' => 'SAN PEDRO DE ATACAMA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 2,
          'comuna' => 'MEJILLONES',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 2,
          'comuna' => 'TOCOPILLA',
      ]);
      //tercera region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 3,
          'comuna' => 'CALDERA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 3,
          'comuna' => 'CHAÑARAL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 3,
          'comuna' => 'COPIAPÓ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 3,
          'comuna' => 'DIEGO DE ALMAGRO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 3,
          'comuna' => 'TIERRA AMARILLA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 3,
          'comuna' => 'ALTO DEL CARMEN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 3,
          'comuna' => 'FREIRINA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 3,
          'comuna' => 'HUASCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 3,
          'comuna' => 'VALLENAR',
      ]);
      //cuarta region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'CANELA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'ILLAPEL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'LOS VILOS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'SALAMANCA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'ANDACOLLO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'COQUIMBO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'LA HIGUERA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'LA SERENA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'PAIHUANO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'VICUÑA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'COMBARBALÁ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'MONTE PATRIA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'OVALLE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'PUNITAQUI',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 4,
          'comuna' => 'RÍO HURTADO',
      ]);
      //quinta region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'CALLE LARGA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'LOS ANDES',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'RINCONADA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'SAN ESTEBAN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'CABILDO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'LA LIGUA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'PAPUDO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'PETORCA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'ZAPALLAR',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'HIJUELAS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'LA CALERA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'LA CRUZ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'LIMCHE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'NOGALES',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'OLMUÉ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'PUCHUNCAVÍ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'QUILLOTA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'ALGARROBO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'CARTAGENA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'EL QUISCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'EL TABO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'SAN ANTONIO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'SANTO DOMINGO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'CATEMU',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'LLAY LLAY',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'PANQUEHUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'PUTAENDO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'SAN FELIPE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'SANTA MARIA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'CASABLANCA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'CONCÓN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'JUAN FERNANDEZ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'QUILPUÉ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'VALPARAÍSO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'VILLA ALEMANA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 5,
          'comuna' => 'VIÑA DEL MAR',
      ]);
      //sexta region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'CODEGUA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'COINCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'COLTAUCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'DOÑIHUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'GRANEROS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'MACHALÍ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'OLIVAR',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'RANCAGUA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'RENGO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'REQUINOA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'SAN FRANCISCO DE MOSTAZAL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'CHIMBARONGO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'NANCAGUA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'PLACILLA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'SAN FERNANDO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'LAS CABRAS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'MALLOA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'PEUMO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'PICHIDEGUA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'QUINTA DE TILCOCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'SAN VICENTE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'CHÉPICA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'LITUECHE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'LOLOL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'MARCHIGUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'NAVIDAD',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'PALMILLA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'PAREDONES',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'PERALILLO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'PICHILEMU',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'PUMANQUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'RAPEL-LA ESTRELLA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 6,
          'comuna' => 'SANTA CRUZ',
      ]);
      //septima region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'CAUQUENES',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'CHANCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'PELLUHUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'CURICÓ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'HUALAÑÉ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'LICANTÉN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'MOLINA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'ROMERAL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'SAGRADA FAMILIA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'TENO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'VICHUQUÉN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'COLBÚN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'LINARES',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'LONGAVÍ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'SAN JAVIER',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'VILLA ALEGRE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'YERBAS BUENAS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'PARRAL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'RETIRO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'CONSTITUCIÓN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'CUREPTO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'EMPEDRADO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'MAULE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'PELARCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'PENCAHUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'RIO CLARO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'SAN CLEMENTE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'SAN RAFAEL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 7,
          'comuna' => 'TALCA',
      ]);
      //octava region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'ARAUCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'CAÑETE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'CONTULMO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'CURANILAHUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'LEBU',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'LOS ALAMOS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'TIRUA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'CHIGUAYANTE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'CONCEPCIÓN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'CORONEL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'FLORIDA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'HUALPÉN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'HUALQUI',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'LOTA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'PENCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'SAN PEDRO DE LA PAZ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'SANTA JUANA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'TALCAHUANO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'TOMÉ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'ANTUCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'CABRERO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'LAJA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'LOS ANGELES',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'QUILLECO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'SAN ROSENDO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'TUCAPEL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'YUMBEL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'ALTO BÍO BÍO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'MULCHÉN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'NACIMIENTO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'NEGRETE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'QUILACO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 8,
          'comuna' => 'SANTA BÁRBARA',
      ]);
      //novena region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'ANGOL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'COLLIPULLI',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'ERCILLA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'LOS SAUCES',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'LUMACO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'PURÉN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'REINACO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'CARAHUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'CHOLCHOL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'NUEVA IMPERIAL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'PUERTO SAAVEDRA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'TEODORO SCHMIDT',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => ' TOLTÉN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'CUNCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'FREIRE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'GALVARINO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'LAUTARO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'MELIPEUCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'PADRE DE LAS CASAS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'PERQUENCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'TEMUCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'VILCÚN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'CURACAUTÍN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'LONQUIMAY',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'TRAIGUÉN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'VICTORIA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'CURARREHUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'GORBEA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'LONCOCHE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'PITRUFQUÉN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'PUCÓN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 9,
          'comuna' => 'VILLARRICA',
      ]);
      //decima region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'ANCUD',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'QUEMCHI',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'CASTRO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'CHONCHI',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'CURACO DE VELEZ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'DALCAHUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'PUQUELDÓN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'QUEILÉN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'QUELLÓN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'QUINCHAO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'OSORNO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'PUYEHUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'SAN JUAN DE LA COSTA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'SAN PABLO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'CHAITÉN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'FUTALEUFÚ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'PALENA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'COCHAMÓ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'HUALAIHUÉ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'LOS MUERMOS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'MAULLÍN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'PUERTO MONTT',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'FRESIA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'FRUTILLAR',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'LLANQUIHUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'PUERTO VARAS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'PUERTO OCTAY',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'PURRANQUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 10,
          'comuna' => 'RÍO NEGRO',
      ]);
      //11 region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 11,
          'comuna' => 'CHILE CHICO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 11,
          'comuna' => 'RÍO IBÁÑEZ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 11,
          'comuna' => 'COCHRANE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 11,
          'comuna' => 'O\'HIGGINS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 11,
          'comuna' => 'TORTEL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 11,
          'comuna' => 'COYHAIQUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 11,
          'comuna' => 'LAGO VERDE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 11,
          'comuna' => 'AYSÉN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 11,
          'comuna' => 'CISNES',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 11,
          'comuna' => 'GUAITECAS',
      ]);
      //12 region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 12,
          'comuna' => 'ANTÁRTICA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 12,
          'comuna' => 'CABO DE HORNOS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 12,
          'comuna' => 'LAGUNA BLANCA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 12,
          'comuna' => 'PUNTA ARENAS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 12,
          'comuna' => 'RÍO VERDE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 12,
          'comuna' => 'SAN GREGORIO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 12,
          'comuna' => 'PORVENIR',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 12,
          'comuna' => 'PRIMAVERA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 12,
          'comuna' => 'TIMAUKEL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 12,
          'comuna' => 'NATALES',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 12,
          'comuna' => 'TORRES DEL PAINE',
      ]);
      //13 region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'CERRILLOS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'CERRO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'NAVIA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'COLINA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'CONCHALÍ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'ESTACIÓN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'CENTRAL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'HUECHURABA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'INDEPENDENCIA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'LA CISTERNA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'LA FLORIDA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'LA GRANJA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'LA REINA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'LAMPA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'LAS CONDES',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'LO BARNECHEA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'LO ESPEJO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'LO PRADO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'MACUL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'MAIPÚ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'PAINE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'PEDRO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'AGUIRRE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'CERDA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'PEÑALOLÉN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'PROVIDENCIA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'PUDAHUEL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'QUILICURA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'QUINTA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'NORMAL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'RECOLETA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'RENCA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'SAN JOAQUÍN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'SAN MIGUEL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'SAN RAMÓN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'SANTIAGO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'TIL TIL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'VITACURA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'ÑUÑOA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'BUIN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'CALERA DE TANGO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'EL BOSQUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'LA PINTANA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'PAINE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'PIRQUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'PUENTE ALTO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'SAN BERNARDO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'SAN JOSE DE MAIPO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'ALHUÉ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'CURACAVÍ',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'MARIA PINTO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'MELIPILLA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'SAN PEDRO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'EL MONTE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'ISLA DE MAIPO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'PADRE HURTADO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'PEÑAFLOR',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 13,
          'comuna' => 'TALAGANTE',
      ]);
      //14 region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 14,
          'comuna' => 'FUTRONO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 14,
          'comuna' => 'PAILLACO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 14,
          'comuna' => 'LA UNIÓN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 14,
          'comuna' => 'LAGO RANCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 14,
          'comuna' => 'RÍO BUENO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 14,
          'comuna' => 'CORRAL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 14,
          'comuna' => 'MAFIL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 14,
          'comuna' => 'MARIQUINA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 14,
          'comuna' => 'VALDIVIA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 14,
          'comuna' => 'PANGUIPULLI',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 14,
          'comuna' => 'LANCO',
      ]);
      //15 region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 15,
          'comuna' => 'ARICA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 15,
          'comuna' => 'CAMARONES',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 15,
          'comuna' => 'GENERAL LAGOS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 15,
          'comuna' => 'PUTRE',
      ]);
      //16 region------------------------------------------------
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'EL CARMEN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'PEMUCO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'QUILLÓN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'RANQUIL',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'SAN IGNACIO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'YUNGAY',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'CHILLÁN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'CHILLÁN VIEJO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'COIHUECO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'PINTO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'PORTEZUELO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'COBQUECURA',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'COELEMU',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'NINHUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'QUIRIHUE',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'SAN FABIÁN',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'SAN NICOLÁS',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'TREHUACO',
      ]);
      DB::table('comunas')->insert([
          'region_id'     => 16,
          'comuna' => 'ÑIQUÉN',
      ]);
    }
}
