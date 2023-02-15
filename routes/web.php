<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'login']);
#Route::get('/home', [PagesController::class, 'home']);
#Route::get('/reg', [PagesController::class, 'reg']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/review', [PagesController::class, 'review']);
Route::get('/packages', [PagesController::class, 'packages']);
Route::post('/confirm', [PagesController::class, 'confirm']);
Route::get('/ilocos', [PagesController::class, 'ilocos']);
Route::get('/apayao', [PagesController::class, 'apayao']);
Route::get('/baguio', [PagesController::class, 'baguio']);
Route::get('/bataan', [PagesController::class, 'bataan']);
Route::get('/batangas', [PagesController::class, 'batangas']);
Route::get('/benguet', [PagesController::class, 'benguet']);
Route::get('/bicol', [PagesController::class, 'bicol']);
Route::get('/bulacan', [PagesController::class, 'bulacan']);
Route::get('/cagayan-province', [PagesController::class, 'cagayan_prov']);
Route::get('/cagayan', [PagesController::class, 'cagayan']);
Route::get('/calabarzon', [PagesController::class, 'calabarzon']);
Route::get('/cordillera-administrative-region', [PagesController::class, 'cordillera']);
Route::get('/catanduanes', [PagesController::class, 'catanduanes']);
Route::get('/central-luzon', [PagesController::class, 'central_luzon']);
Route::get('/nueva-ecija', [PagesController::class, 'nueva_ecija']);
Route::get('/ifugao', [PagesController::class, 'ifugao']);
Route::get('/ilocos-sur', [PagesController::class, 'ilocos_sur']);
Route::get('/isabela', [PagesController::class, 'isabela']);
Route::get('/kalinga', [PagesController::class, 'kalinga']);
Route::get('/la-union', [PagesController::class, 'la_union']);
Route::get('/laguna', [PagesController::class, 'laguna']);
Route::get('/las-pinas', [PagesController::class, 'las_pinas']);
Route::get('/makati', [PagesController::class, 'makati']);
Route::get('/malabon', [PagesController::class, 'malabon']);
Route::get('/mandaluyong', [PagesController::class, 'mandaluyong']);
Route::get('/manila', [PagesController::class, 'manila']);
Route::get('/marikina', [PagesController::class, 'marikina']);
Route::get('/masbate', [PagesController::class, 'masbate']);
Route::get('/mimaropa', [PagesController::class, 'mimaropa']);
Route::get('/muntinlupa', [PagesController::class, 'muntinlupa']);
Route::get('/national-capital-region', [PagesController::class, 'national_capital_region']);
Route::get('/camarines-norte', [PagesController::class, 'camarines_norte']);
Route::get('/nueva-vizcaya', [PagesController::class, 'nueva_vizcaya']);
Route::get('/occidental-mindoro', [PagesController::class, 'occidental_mindoro']);
Route::get('/oriental-mindoro', [PagesController::class, 'oriental_mindoro']);
Route::get('/palawan', [PagesController::class, 'palawan']);
Route::get('/pampanga', [PagesController::class, 'pampanga']);
Route::get('/pangasinan', [PagesController::class, 'pangasinan']);
Route::get('/quezon', [PagesController::class, 'quezon']);
Route::get('/quirino', [PagesController::class, 'quirino']);
Route::get('/rizal', [PagesController::class, 'rizal']);
Route::get('/romblon', [PagesController::class, 'romblon']);
Route::get('/sorsogon', [PagesController::class, 'sorsogon']);
Route::get('/camarines-sur', [PagesController::class, 'camarines_sur']);
Route::get('/tarlac', [PagesController::class, 'tarlac']);
Route::get('/zambales', [PagesController::class, 'zambales']);
Route::get('/mt-amuyao', [PagesController::class, 'mt_amuyao']);
Route::get('/st-andrew-kim-tae-gon-shrine', [PagesController::class, 'st_andrew_kim_tae_gon_shrine']);
Route::get('/anawangin-cove', [PagesController::class, 'anawangin_cove']);
Route::get('/angel-cacnio-gallery', [PagesController::class, 'angel_cacnio_gallery']);
Route::get('/st-anthony-of-padua-cathedral', [PagesController::class, 'st_anthony_of_padua_cathedral']);
Route::get('/anzap-twin-falls', [PagesController::class, 'anzap_twin_falls']);
Route::get('/apao-rolling-hills', [PagesController::class, 'apao_rolling_hills']);
Route::get('/apo-reef-natural-park', [PagesController::class, 'apo_reef_natural_park']);
Route::get('/mt-arayat-national-park', [PagesController::class, 'mt_arayat_national_park']);
Route::get('/aran-cave', [PagesController::class, 'aran_cave']);
Route::get('/arigoy-river', [PagesController::class, 'arigoy_river']);
Route::get('/aroroy-lighthouse', [PagesController::class, 'aroroy_lighthouse']);
Route::get('/the-ayala-museum', [PagesController::class, 'the_ayala_museum']);
Route::get('/bacuit-bay-islands', [PagesController::class, 'bacuit_bay_islands']);
Route::get('/bagasbas-beach', [PagesController::class, 'bagasbas_beach']);
Route::get('/bahay-ni-rizal', [PagesController::class, 'bahay_ni_rizal']);
Route::get('/balesin-island', [PagesController::class, 'balesin_island']);
Route::get('/balacay-point', [PagesController::class, 'balacay_point']);
Route::get('/bamboo-organ-museum', [PagesController::class, 'bamboo_organ_museum']);
Route::get('/bantay-church-bell-tower', [PagesController::class, 'bantay_church_bell_tower']);
Route::get('/mt-banahaw', [PagesController::class, 'mt_banahaw']);
Route::get('/bangui-windmills', [PagesController::class, 'bangui_windmills']);
Route::get('/barcelona-church', [PagesController::class, 'barcelona_church']);
Route::get('/san-bartolome-church', [PagesController::class, 'san_bartolome_church']);
Route::get('/basco-lighthouse', [PagesController::class, 'basco_lighthouse']);
Route::get('/bat-ongan-cave', [PagesController::class, 'bat_ongan_cave']);
Route::get('/batad-amphitheater-terraces', [PagesController::class, 'batad_amphitheater_terraces']);
Route::get('/binucot-beach', [PagesController::class, 'binucot_beach']);
Route::get('/binalasan-falls', [PagesController::class, 'binalasan_falls']);
Route::get('/binurong-point', [PagesController::class, 'binurong_point']);
Route::get('/blue-lagoon', [PagesController::class, 'blue_lagoon']);
Route::get('/boac-cathedral', [PagesController::class, 'boac_cathedral']);
Route::get('/bolinao-falls', [PagesController::class, 'bolinao_falls']);
Route::get('/bonsai-forest', [PagesController::class, 'bonsai_forest']);
Route::get('/bonifacio-circle-monumento', [PagesController::class, 'bonifacio_circle_monumento']);
Route::get('/bontoc-museum', [PagesController::class, 'bontoc_museum']);
Route::get('/botolan-resettlement-sites', [PagesController::class, 'botolan_resettlement_sites']);
Route::get('/botong-twin-falls', [PagesController::class, 'botong_twin_falls']);
Route::get('/buaya-caves', [PagesController::class, 'buaya_caves']);
Route::get('/bunguit-falls', [PagesController::class, 'bunguit_falls']);
Route::get('/bulalacao-island', [PagesController::class, 'bulalacao_island']);
Route::get('/bulalakaw-falls', [PagesController::class, 'bulalakaw_falls']);
Route::get('/mt-bulusan', [PagesController::class, 'mt_bulusan']);
Route::get('/buntun-bridge', [PagesController::class, 'buntun_bridge']);
Route::get('/burnham-park', [PagesController::class, 'burnham_park']);
Route::get('/busay-falls', [PagesController::class, 'busay_falls']);
Route::get('/buntod-bar-and-reef-marine-sanctuary', [PagesController::class, 'buntod_bar_and_reef_marine_sanctuary']);
Route::get('/calvary-hills', [PagesController::class, 'calvary_hills']);
Route::get('/calaguas-islands', [PagesController::class, 'calaguas_islands']);
Route::get('/calanasan-philippine-eagle-sanctuary', [PagesController::class, 'calanasan_philippine_eagle_sanctuary']);
Route::get('/caliraya-lake', [PagesController::class, 'caliraya_lake']);
Route::get('/calle-crisologo', [PagesController::class, 'calle_crisologo']);
Route::get('/callao-cave', [PagesController::class, 'callao_cave']);
Route::get('/camp-john-hay', [PagesController::class, 'camp_john_hay']);
Route::get('/candaba-bird-sanctuary', [PagesController::class, 'candaba_bird_sanctuary']);
Route::get('/capas-national-shrine', [PagesController::class, 'capas_national_shrine']);
Route::get('/capones-islands', [PagesController::class, 'capones_islands']);
Route::get('/carron-dream-park', [PagesController::class, 'carron_dream_park']);
Route::get('/caramoan-islands', [PagesController::class, 'caramoan_islands']);
Route::get('/casapsapan-beach', [PagesController::class, 'casapsapan_beach']);
Route::get('/the-chinese-cemetary', [PagesController::class, 'the_chinese_cemetary']);
Route::get('/clark-museum-and-4d-theater', [PagesController::class, 'clark_museum_and_4d_theater']);
Route::get('/calao-falls', [PagesController::class, 'calao_falls']);
Route::get('/corregidor-island', [PagesController::class, 'corregidor_island']);
Route::get('/mt-damas', [PagesController::class, 'mt_damas']);
Route::get('/dambana-ng-mga-alaala', [PagesController::class, 'dambana_ng_mga_alaala']);
Route::get('/daranak-falls', [PagesController::class, 'daranak_falls']);
Route::get('/museo-de-la-salle', [PagesController::class, 'museo_de_la_salle']);
Route::get('/dicotcotan-beach', [PagesController::class, 'dicotcotan_beach']);
Route::get('/dicasalarin-cove', [PagesController::class, 'dicasalarin_cove']);
Route::get('/diguisit-beach-and-rock-formation', [PagesController::class, 'diguisit_beach_and_rock_formation']);
Route::get('/dinosaurs-island-pampanga', [PagesController::class, 'dinosaurs_island_pampanga']);
Route::get('/saint-dominic-cathedral', [PagesController::class, 'saint_dominic_cathedral']);
Route::get('/dulag-historical-marker', [PagesController::class, 'dulag_historical_marker']);
Route::get('/dupag-rock-formation', [PagesController::class, 'dupag_rock_formation']);
Route::get('/enchanted-kingdom', [PagesController::class, 'enchanted_kingdom']);
Route::get('/gen-emilio-aguinaldo-shrine', [PagesController::class, 'gen_emilio_aguinaldo_shrine']);
Route::get('/enchanted-cave', [PagesController::class, 'enchanted_cave']);
Route::get('/ermita-hill', [PagesController::class, 'ermita_hill']);
Route::get('/farm-villarontes-flower-farm', [PagesController::class, 'farm_villarontes_flower_farm']);
Route::get('/fantasy-world', [PagesController::class, 'fantasy_world']);
Route::get('/footprints-beach', [PagesController::class, 'footprints_beach']);
Route::get('/forest-garden', [PagesController::class, 'forest_garden']);
Route::get('/fortune-island', [PagesController::class, 'fortune_island']);
Route::get('/st-francis-square-mall', [PagesController::class, 'st_francis_square_mall']);
Route::get('/marikina-city-footwear-museum', [PagesController::class, 'marikina_city_footwear_museum']);
Route::get('/gen-aguinaldo-shrine', [PagesController::class, 'gen_aguinaldo_shrine']);
Route::get('/greenfield-weekend-market', [PagesController::class, 'greenfield_weekend_market']);
Route::get('/gololan-falls', [PagesController::class, 'gololan_falls']);
Route::get('/governors-rapids', [PagesController::class, 'governors_rapids']);
Route::get('/greenbelt-chapel', [PagesController::class, 'greenbelt_chapel']);
Route::get('/guadalupe-ruins', [PagesController::class, 'guadalupe_ruins']);
Route::get('/guiguinto-old-train-station', [PagesController::class, 'guiguinto_old_train_station']);
Route::get('/mt-guiting-guiting', [PagesController::class, 'mt_guiting_guiting']);
Route::get('/gulon-peak', [PagesController::class, 'gulon_peak']);
Route::get('/mt-halcon', [PagesController::class, 'mt_halcon']);
Route::get('/the-hanging-coffins', [PagesController::class, 'the_hanging_coffins']);
Route::get('/honestly-coffee-shop', [PagesController::class, 'honestly_coffee_shop']);
Route::get('/hundred-islands', [PagesController::class, 'hundred_islands']);
Route::get('/ibaviosa-house-and-the-patis-factory', [PagesController::class, 'ibaviosa_house_and_the_patis_factory']);
Route::get('/mt-iglit-baco-national-park', [PagesController::class, 'mt_iglit_baco_national_park']);
Route::get('/immaculada-concepcion-de-malabon-church', [PagesController::class, 'immaculada_concepcion_de_malabon_church']);
Route::get('/mt-isarog', [PagesController::class, 'mt_isarog']);
Route::get('/iwahig-firefly', [PagesController::class, 'iwahig_firefly']);
Route::get('/saint-joseph-cathedral', [PagesController::class, 'saint_joseph_cathedral']);
Route::get('/saint-john-the-baptist-church', [PagesController::class, 'saint_john_the_baptist_church']);
Route::get('/saint-joseph-church', [PagesController::class, 'saint_joseph_church']);
Route::get('/kamay-ni-hesus-shrine', [PagesController::class, 'kamay_ni_hesus_shrine']);
Route::get('/kanaway-beach', [PagesController::class, 'kanaway_beach']);
Route::get('/kaparkan-falls', [PagesController::class, 'kaparkan_falls']);
Route::get('/kapurpurawan-rock-formation', [PagesController::class, 'kapurpurawan_rock_formation']);
Route::get('/kiagan-shrine', [PagesController::class, 'kiagan_shrine']);
Route::get('/kili-falls', [PagesController::class, 'kili_falls']);
Route::get('/lake-buhi', [PagesController::class, 'lake_buhi']);
Route::get('/our-lady-of-the-abandoned-parish', [PagesController::class, 'our_lady_of_the_abandoned_parish']);
Route::get('/lahuy-island', [PagesController::class, 'lahuy_island']);
Route::get('/laiya-aplaya', [PagesController::class, 'laiya_aplaya']);
Route::get('/la-loma-cementary', [PagesController::class, 'la_loma_cementary']);
Route::get('/landingan-viewpoint', [PagesController::class, 'landingan_viewpoint']);
Route::get('/las-casas-filipinas-de-acuzar', [PagesController::class, 'las_casas_filipinas_de_acuzar']);
Route::get('/leon-gallery', [PagesController::class, 'leon_gallery']);
Route::get('/libtec-crystal-cave', [PagesController::class, 'libtec_crystal_cave']);
Route::get('/limutan-falls', [PagesController::class, 'limutan_falls']);
Route::get('/lintungan-falls', [PagesController::class, 'lintungan_falls']);
Route::get('/linao-ni-victo', [PagesController::class, 'linao_ni_victo']);
Route::get('/lobo', [PagesController::class, 'lobo']);
Route::get('/lotus-valley-farm', [PagesController::class, 'lotus_valley_farm']);
Route::get('/lower-magat-eco-tourism-park', [PagesController::class, 'lower_magat_eco_tourism_park']);
Route::get('/lppchea', [PagesController::class, 'lppchea']);
Route::get('/lubo-and-mangali-rice-terraces', [PagesController::class, 'lubo_and_mangali_rice_terraces']);
Route::get('/lussok-cave-underground-river', [PagesController::class, 'lussok_cave_underground_river']);
Route::get('/mactol-falls', [PagesController::class, 'mactol_falls']);
Route::get('/ma-cho-temple', [PagesController::class, 'ma_cho_temple']);
Route::get('/mt-maculot', [PagesController::class, 'mt_maculot']);
Route::get('/mahabang-buhangin', [PagesController::class, 'mahabang_buhangin']);
Route::get('/mt-makiling', [PagesController::class, 'mt_makiling']);
Route::get('/malatap-falls', [PagesController::class, 'malatap_falls']);
Route::get('/mampurog-river', [PagesController::class, 'mampurog_river']);
Route::get('/maniwaya-island', [PagesController::class, 'maniwaya_island']);
Route::get('/manila-ocean-park', [PagesController::class, 'manila_ocean_park']);
Route::get('/manila-zoological-and-botanical-garden', [PagesController::class, 'manila_zoological_and_botanical_garden']);
Route::get('/mapesak-falls', [PagesController::class, 'mapesak_falls']);
Route::get('/mariveles-view-park', [PagesController::class, 'mariveles_view_park']);
Route::get('/marcelo-h-del-pilar-museum', [PagesController::class, 'marcelo_h_del_pilar_museum']);
Route::get('/marinduque-wildlife-sanctuary', [PagesController::class, 'marinduque_wildlife_sanctuary']);
Route::get('/masungi-georeserve', [PagesController::class, 'masungi_georeserve']);
Route::get('/mt-mayon', [PagesController::class, 'mt_mayon']);
Route::get('/sm-megamall', [PagesController::class, 'sm_megamall']);
Route::get('/mindoro-beach', [PagesController::class, 'mindoro_beach']);
Route::get('/minalungao-national-park', [PagesController::class, 'minalungao_national_park']);
Route::get('/mines-view-park', [PagesController::class, 'mines_view_park']);
Route::get('/mongpong-island', [PagesController::class, 'mongpong_island']);
Route::get('/mt-mog-ao', [PagesController::class, 'mt_mog_ao']);
Route::get('/monasterio-de-tarlac', [PagesController::class, 'monasterio_de_tarlac']);
Route::get('/morong-beach', [PagesController::class, 'morong_beach']);
Route::get('/museo-ilocos-norte', [PagesController::class, 'museo_ilocos_norte']);
Route::get('/museo-de-baler', [PagesController::class, 'museo_de_baler']);
Route::get('/nayong-pilipino', [PagesController::class, 'nayong_pilipino']);
Route::get('/nagcarlan-underground-cemetary', [PagesController::class, 'nagcarlan_underground_cemetary']);
Route::get('/nagacadan-rice-terraces', [PagesController::class, 'nagacadan_rice_terraces']);
Route::get('/mt-napulawan', [PagesController::class, 'mt_napulawan']);
Route::get('/nature-church', [PagesController::class, 'nature_church']);
Route::get('/national-museum-complex', [PagesController::class, 'national_museum_complex']);
Route::get('/northen-blossom-flower-farm', [PagesController::class, 'northen_blossom_flower_farm']);
Route::get('/onoda-trail-and-caves', [PagesController::class, 'onoda_trail_and_caves']);
Route::get('/paguriran-island-and-lagoon', [PagesController::class, 'paguriran_island_and_lagoon']);
Route::get('/pandan-island', [PagesController::class, 'pandan_island']);
Route::get('/paoay-church', [PagesController::class, 'paoay_church']);
Route::get('/patag-island', [PagesController::class, 'patag_island']);
Route::get('/patapat-viaduct', [PagesController::class, 'patapat_viaduct']);
Route::get('/penafrancia-basilica-minore', [PagesController::class, 'penafrancia_basilica_minore']);
Route::get('/st-peters-cathedral', [PagesController::class, 'st_peters_cathedral']);
Route::get('/philippine-science-complex', [PagesController::class, 'philippine_science_complex']);
Route::get('/mt-pinatubo', [PagesController::class, 'mt_pinatubo']);
Route::get('/pililla-wind-farm', [PagesController::class, 'pililla_wind_farm']);
Route::get('/pinacanauan-river', [PagesController::class, 'pinacanauan_river']);
Route::get('/pinamuntugan-island', [PagesController::class, 'pinamuntugan_island']);
Route::get('/plaza-salcedo', [PagesController::class, 'plaza_salcedo']);
Route::get('/poctoy-white-beach', [PagesController::class, 'poctoy_white_beach']);
Route::get('/puerto-princesa-subterranean', [PagesController::class, 'puerto_princesa_subterranean']);
Route::get('/mt-purro-nature-reserve', [PagesController::class, 'mt_purro_nature_reserve']);
Route::get('/puraran-beach', [PagesController::class, 'puraran_beach']);
Route::get('/quirino-watersports-complex', [PagesController::class, 'quirino_watersports_complex']);
Route::get('/quitinday-green-hills-formation', [PagesController::class, 'quitinday_green_hills_formation']);
Route::get('/rancho-de-cabileo', [PagesController::class, 'rancho_de_cabileo']);
Route::get('/ragara-beach', [PagesController::class, 'ragara_beach']);
Route::get('/marikina-river-park', [PagesController::class, 'marikina_river_park']);
Route::get('/rizal-park', [PagesController::class, 'rizal_park']);
Route::get('/san-roque-cathedral', [PagesController::class, 'san_roque_cathedral']);
Route::get('/salibungot-beach', [PagesController::class, 'salibungot_beach']);
Route::get('/mt-samat-national-shrine', [PagesController::class, 'mt_samat_national_shrine']);
Route::get('/samal-church', [PagesController::class, 'samal_church']);
Route::get('/san-matias-parish-church', [PagesController::class, 'san_matias_parish_church']);
Route::get('/santuario-de-san-ezekiel-moreno', [PagesController::class, 'santuario_de_san_ezekiel_moreno']);
Route::get('/fort-santiago', [PagesController::class, 'fort_santiago']);
Route::get('/sapilang-falls', [PagesController::class, 'sapilang_falls']);
Route::get('/shangri-la-plaza-mall', [PagesController::class, 'shangri_la_plaza_mall']);
Route::get('/sombrero-island', [PagesController::class, 'sombrero_island']);
Route::get('/the-spirit-of-bethlehem-museum', [PagesController::class, 'the_spirit_of_bethlehem_museum']);
Route::get('/strawberry-farm', [PagesController::class, 'strawberry_farm']);
Route::get('/sumlang-lake', [PagesController::class, 'sumlang_lake']);
Route::get('/susong-dalaga', [PagesController::class, 'susong_dalaga']);
Route::get('/sy-juco-house', [PagesController::class, 'sy_juco_house']);
Route::get('/taal-volcano', [PagesController::class, 'taal_volcano']);
Route::get('/tagaytay-ridge', [PagesController::class, 'tagaytay_ridge']);
Route::get('/talisayen-cove', [PagesController::class, 'talisayen_cove']);
Route::get('/tambac-beach', [PagesController::class, 'tambac_beach']);
Route::get('/tamawan-village', [PagesController::class, 'tamawan_village']);
Route::get('/tangadan-falls', [PagesController::class, 'tangadan_falls']);
Route::get('/taoist-temple', [PagesController::class, 'taoist_temple']);
Route::get('/tapuakan-river', [PagesController::class, 'tapuakan_river']);
Route::get('/tappiyah-falls', [PagesController::class, 'tappiyah_falls']);
Route::get('/tayid-lighthouse', [PagesController::class, 'tayid_lighthouse']);
Route::get('/tekip-falls', [PagesController::class, 'tekip_falls']);
Route::get('/the-hellship-memorials', [PagesController::class, 'the_hellship_memorials']);
Route::get('/mt-timbak', [PagesController::class, 'mt_timbak']);
Route::get('/tinipak-river', [PagesController::class, 'tinipak_river']);
Route::get('/tambobong-beach', [PagesController::class, 'tambobong_beach']);
Route::get('/tondal-beach', [PagesController::class, 'tondal_beach']);
Route::get('/the-ayala-triangle-gardens', [PagesController::class, 'the_ayala_triangle_gardens']);
Route::get('/tukuran-falls', [PagesController::class, 'tukuran_falls']);
Route::get('/tubbataha-reefs-natural-park', [PagesController::class, 'tubbataha_reefs_natural_park']);
Route::get('/tumuyoc-falls', [PagesController::class, 'tumuyoc_falls']);
Route::get('/ugong-rock', [PagesController::class, 'ugong_rock']);
Route::get('/mt-ugu', [PagesController::class, 'mt_ugu']);
Route::get('/mt-ulap', [PagesController::class, 'mt_ulap']);
Route::get('/vayang-rolling-hills', [PagesController::class, 'vayang_rolling_hills']);
Route::get('/verdivia-falls', [PagesController::class, 'verdivia_falls']);
Route::get('/vigan-cathedral', [PagesController::class, 'vigan_cathedral']);
Route::get('/white-island', [PagesController::class, 'white_island']);
Route::get('/mount-province', [PagesController::class, 'mount_province']);
Route::get('/alabang-town-center', [PagesController::class, 'alabang_town_center']);
Route::get('/jamboree-lake', [PagesController::class, 'jamboree_lake']);
Route::get('/japanese-memorial-cemetery', [PagesController::class, 'japanese_memorial_cemetery']);
Route::get('/sunken-garden', [PagesController::class, 'sunken_garden']);
Route::get('/museo-ng-muntinlupa', [PagesController::class, 'museo_ng_muntinlupa']);
Route::get('/navotas', [PagesController::class, 'navotas']);
Route::get('/navotas-fish-port', [PagesController::class, 'navotas_fish_port']);
Route::get('/san-jose-de-navotas-parish-church', [PagesController::class, 'san_jose_de_navotas_parish_church']);
Route::get('/century-house', [PagesController::class, 'century_house']);
Route::get('/navotas-city-hall', [PagesController::class, 'navotas_city_hall']);
Route::get('/navotas-river', [PagesController::class, 'navotas_river']);
Route::get('/paranaque', [PagesController::class, 'paranaque']);
Route::get('/solaire-resort-and-casino', [PagesController::class, 'solaire_resort_and_casino']);
Route::get('/redemptorist-church', [PagesController::class, 'redemptorist_church']);
Route::get('/city-of-dreams-manila', [PagesController::class, 'city_of_dreams_manila']);
Route::get('/the-ayala-malls-manila-bay', [PagesController::class, 'the_ayala_malls_manila_bay']);
Route::get('/okada-manila-resort-and-casino', [PagesController::class, 'okada_manila_resort_and_casino']);
Route::get('/pasay', [PagesController::class, 'pasay']);
Route::get('/upside-down-museum', [PagesController::class, 'upside_down_museum']);
Route::get('/philippine-air-force-aerospace-museum', [PagesController::class, 'philippine_air_force_aerospace_museum']);
Route::get('/sm-mall-of-asia', [PagesController::class, 'sm_mall_of_asia']);
Route::get('/the-dessert-museum', [PagesController::class, 'the_dessert_museum']);
Route::get('/newport-mall', [PagesController::class, 'newport_mall']);
Route::get('/pasig', [PagesController::class, 'pasig']);
Route::get('/ace-water-spa', [PagesController::class, 'ace_water_spa']);
Route::get('/climb-central-manila', [PagesController::class, 'climb_central_manila']);
Route::get('/rainforest-adventure-experience', [PagesController::class, 'rainforest_adventure_experience']);
Route::get('/the-bike-playground', [PagesController::class, 'the_bike_playground']);
Route::get('/beer-house-kapitolyo', [PagesController::class, 'beer_house_kapitolyo']);
Route::get('/pateros', [PagesController::class, 'pateros']);
Route::get('/dulong-bayan-monument', [PagesController::class, 'dulong_bayan_monument']);
Route::get('/san-roque-church', [PagesController::class, 'san_roque_church']);
Route::get('/garden-of-memories', [PagesController::class, 'garden_of_memories']);
Route::get('/qc', [PagesController::class, 'qc']);
Route::get('/museo-ni-manuel-quezon', [PagesController::class, 'museo_ni_manuel_quezon']);
Route::get('/la-mesa-ecopark', [PagesController::class, 'la_mesa_ecopark']);
Route::get('/santo-domingo-church', [PagesController::class, 'santo_domingo_church']);






Route::post('/pt-review', [PagesController::class, 'post_review']);









Route::post('/file_enc_upload', [PagesController::class, 'file_enc_upload']);
Route::patch('/file_enc_enter/{file_id}', [PagesController::class, 'file_enc_enter']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
