<?php

namespace App\Utilities;

use App\User;
use App\WallEntry;
use Faker\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

trait GetsChat
{  
  /**
   * Get data that may need to be inserted into a chat response.
   *
   * @param string $previousUserMessageId
   * @return array
   */
  public function getChatData(string $previousUserMessageId)
  {
    $user = Auth::user();
    
    $userAcknowledge = $this->randomCommon('user', 'acknowledge', 2);
    $userBye = $this->randomCommon('user', 'bye', 2);
    $userGetStarted = $this->randomCommon('user', 'getStarted', 2);
    $userHello = $this->randomCommon('user', 'hello', 2);
    $userOk = $this->randomCommon('user', 'ok', 2);
    $userRequestMoreInfo = $this->randomCommon('user', 'requestMoreInfo', 2);
    $userThanks = $this->randomCommon('user', 'thanks', 2);
    
    $chatDataGeneral = [
      'rand2' => rand(1, 2),
      'rand3' => rand(1, 3),
      'rand4' => rand(1, 4),
      'rand5' => rand(1, 5),
      'userAcknowledge1' => $userAcknowledge[0],
      'userAcknowledge2' => $userAcknowledge[1],
      'userAgree' => $this->randomCommon('user', 'agree'),
      'userBye1' => $userBye[0],
      'userBye2' => $userBye[1],
      'userDisagree' => $this->randomCommon('user', 'disagree'),
      'userGetStarted1' => $userGetStarted[0],
      'userGetStarted2' => $userGetStarted[1],
      'userGreat' => $this->randomCommon('user', 'great'),
      'userHate' => $this->randomCommon('user', 'hate'),
      'userHello1' => $userHello[0],
      'userHello2' => $userHello[1],
      'userLove' => $this->randomCommon('user', 'love'),
      'userOk1' => $userOk[0],
      'userOk2' => $userOk[1],
      'userRequestMoreInfo1' => $userRequestMoreInfo[0],
      'userRequestMoreInfo2' => $userRequestMoreInfo[1],
      'userThanks1' => $userThanks[0],
      'userThanks2' => $userThanks[1],
      'userUnsure' => $this->randomCommon('user', 'unsure'),
      'wallEntry1' => $this->getWandaWallEntry(1),
      'wallEntry2' => $this->getWandaWallEntry(2),
      'wallEntry3' => $this->getWandaWallEntry(3),
      'wallEntry4' => $this->getWandaWallEntry(4),
      'wallEntry5' => $this->getWandaWallEntry(5),
      'wallEntry6' => $this->getWandaWallEntry(6),
      'wallEntry7' => $this->getWandaWallEntry(7),
      'wallEntry8' => $this->getWandaWallEntry(8),
      'wallEntry9' => $this->getWandaWallEntry(9),
      'wallEntry10' => $this->getWandaWallEntry(10),
      'wallEntry11' => $this->getWandaWallEntry(11),
      'wallEntry12' => $this->getWandaWallEntry(12),
      'wallEntry13' => $this->getWandaWallEntry(13),
      'wallEntry14' => $this->getWandaWallEntry(14),
      'wallEntry15' => $this->getWandaWallEntry(15),
      'wallEntry16' => $this->getWandaWallEntry(16),
      'wallEntry17' => $this->getWandaWallEntry(17),
      'wallEntry18' => $this->getWandaWallEntry(18),
      'wallEntry19' => $this->getWandaWallEntry(19),
      'wallEntry20' => $this->getWandaWallEntry(20),
      'wandaAcknowledgeResponse' => $this->randomCommon('wanda', 'acknowledgeResponse'),
      'wandaBye' => $this->randomCommon('wanda', 'bye'),
      'wandaCelebrity' => $this->randomCommon('wanda', 'celebrity'),
      'wandaExpectPositiveResponse' => $this->randomCommon('wanda', 'expectPositiveResponse'),
      'wandaGreat' => $this->randomCommon('wanda', 'great'),
      'wandaHello' => $this->randomCommon('wanda', 'hello'),
      'wandaInitialObservation' => $this->randomCommon('wanda', 'initialObservation'),
      'wandaObservation' => $this->randomCommon('wanda', 'observation'),
      'wandaStartEnthusiastic' => $this->randomCommon('wanda', 'startEnthusiastic'),
    ];
    
    if ($user) {
      $persuaderText = $this->getPersuaderText($user);
      
      $chatDataUser = [
        'country' => $user->country,
        'countryName' => $this->getCountryName($user->country),
        'email' => $user->email,
        'mobileNumber' => $user->mobile_number,
        'name' => $user->first_name,
        'profilePic' => $user->profile_pic,
        'randomFemaleName' => $this->getFakeFirstNames($user->country, 'female', 1),
        'randomMaleName' => $this->getFakeFirstNames($user->country, 'male', 1),
        'randomSurname' => $this->getFakeSurname($user->country),
        'wandaConjunction' => $this->getConjunction('user', $previousUserMessageId),
        'wandaCumulativeResponse' => $this->getWandaCumulativeResponse(),
        'wandaPersuader' => $persuaderText['persuader'],
        'wandaPersuaderPronoun' => $persuaderText['pronoun'],
        'wandaPreviousSentimentResponse' => $this->getResponseToSentiment('user', $previousUserMessageId),
      ];
      
      return array_merge($chatDataGeneral, $chatDataUser);
    }

    return $chatDataGeneral;
  }
  
  /**
   * Gets fragments of text for final chat, saying who persuaded Wanda to change -
   * the user or other people (if the user didn't disagree with Wanda much).
   *
   * @param User $user
   * @return array
   */
  public function getPersuaderText(User $user)
  {
    $meltdownLevel = $user->meltdown_level;
    
    $preFinalMeltdownLevel = ($meltdownLevel >= 50) ? ($meltdownLevel - 50) : $meltdownLevel;
    
    if ($preFinalMeltdownLevel >= 2) {
      return [
        'persuader' => 'you',
        'pronoun' => 'you',
      ];
    } else {
      return [
        'persuader' => "the people I've met",
        'pronoun' => 'they',
      ];
    }
  }
  
  /**
   * Gets an entry from Wanda's wall.
   *
   * @param int $entry
   * @return string|null
   */
  public function getWandaWallEntry(int $entry)
  {
    $wallEntry = WallEntry::orderBy('created_at','desc')->take($entry)->get()->last();
    
    return "<em>\"{$wallEntry->comment}\"</em><br/>{$wallEntry->name} from {$wallEntry->country_name}";
  }
  
  /**
   * Gets the description of Wanda's new identity.
   *
   * @param string $identityId
   * @return string|null
   */
  public function getWandaNewIdentityDescription(string $identityId = null)
  {
    if ($identityId) {
      foreach (__('chats/common.wanda.identity') as $identity) {
        if ($identity['id'] === $identityId) {
          return $identity['description'];
        }
      }
    }
    
    return null;
  }
  
  /**
   * Gets the human readable name of the user's country.
   *
   * @param string $countryCode
   * @return string
   */
  public function getCountryName(string $countryCode)
  {
    $countryName = locale_get_display_region("-{$countryCode}", 'en');
    
    $replacements = [
      'GB' => 'the UK',
      'US' => 'the US',
    ];
    
    if (in_array($countryCode, array_keys($replacements))) {
      $countryName = $replacements[$countryCode];
    }
    
    return $countryName;
  }
  
  /**
   * Gets Wanda's response to the cumulative reactions from the user to previous scenarios
   * i.e. overall on previous days has the user liked what Wanda has done, a mix or disliked it.
   *
   * @return string
   */
  public function getWandaCumulativeResponse()
  {
    // TODO: get this working, looking at the combination of different scenario reactions
    $reaction = 'negative';
    
    return __("chats/common.wanda.cumulativeResponses.{$reaction}")[0];
  }
  
  /**
   * Gets 10 fake first names that are mostly women.
   *
   * @param string $countryCode
   * @return array
   */
  public function getFakeMostlyWomenFirstNames(string $countryCode)
  {
    $womenNames = $this->getFakeFirstNames($countryCode, 'female', 8);
    $menNames = $this->getFakeFirstNames($countryCode, 'male', 2);

    return shuffle(array_merge($womenNames, $menNames));
  }

  /**
   * Gets one or more fake first names.
   *
   * @param string $countryCode
   * @param string $gender
   * @param int $count
   * @return string|array
   */
  public function getFakeFirstNames(string $countryCode, string $gender, int $count)
  {
    $faker = Factory::create($this->getLanguageCountryCode($countryCode));
    
    if ($count === 1) {
      return $faker->firstName($gender);
    } else {
      $names = [];
      for ($x = 0; $x < $count; $x++) {
        $names[] = $faker->firstName($gender);
      }
      
      return $names;
    }
  }
  
  /**
   * Gets a fake surname.
   *
   * @param string $countryCode
   * @return string
   */
  public function getFakeSurname(string $countryCode)
  {
    $faker = Factory::create($this->getLanguageCountryCode($countryCode));
    
    return $faker->lastName();
  }
  
  /**
   * Gets a language + country code (e.g. en_US) from a country code,
   * by assuming a default local language
   *
   * @param string $countryCode
   * @return string
   */
  public function getLanguageCountryCode(string $countryCode)
  {
    switch (strtoupper($countryCode)) {
      case 'JO':
        return 'ar_JO';
        break;
      case 'SA':
        return 'ar_SA';
        break;
      case 'AT':
        return 'at_AT';
        break;
      case 'BG':
        return 'bg_BG';
        break;
      case 'BD':
        return 'bn_BD';
        break;
      case 'CZ':
        return 'cs_CZ';
        break;
      case 'DK':
        return 'da_DK';
        break;
      case 'AT':
        return 'de_AT';
        break;
      case 'CH':
        return 'de_CH';
        break;
      case 'DE':
        return 'de_DE';
        break;
      case 'CY':
        return 'el_CY';
        break;
      case 'GR':
        return 'el_GR';
        break;
      case 'AU':
        return 'en_AU';
        break;
      case 'CA':
        return 'en_CA';
        break;
      case 'GB':
        return 'en_GB';
        break;
      case 'HK':
        return 'en_HK';
        break;
      case 'IN':
        return 'en_IN';
        break;
      case 'NG':
        return 'en_NG';
        break;
      case 'NZ':
        return 'en_NZ';
        break;
      case 'PH':
        return 'en_PH';
        break;
      case 'SG':
        return 'en_SG';
        break;
      case 'UG':
        return 'en_UG';
        break;
      case 'US':
        return 'en_US';
        break;
      case 'ZA':
        return 'en_ZA';
        break;
      case 'AR':
        return 'es_AR';
        break;
      case 'ES':
        return 'es_ES';
        break;
      case 'PE':
        return 'es_PE';
        break;
      case 'VE':
        return 'es_VE';
        break;
      case 'IR':
        return 'fa_IR';
        break;
      case 'FI':
        return 'fi_FI';
        break;
      case 'BE':
        return 'fr_BE';
        break;
      case 'CA':
        return 'fr_CA';
        break;
      case 'CH':
        return 'fr_CH';
        break;
      case 'FR':
        return 'fr_FR';
        break;
      case 'IL':
        return 'he_IL';
        break;
      case 'HR':
        return 'hr_HR';
        break;
      case 'HU':
        return 'hu_HU';
        break;
      case 'AM':
        return 'hy_AM';
        break;
      case 'ID':
        return 'id_ID';
        break;
      case 'IS':
        return 'is_IS';
        break;
      case 'CH':
        return 'it_CH';
        break;
      case 'IT':
        return 'it_IT';
        break;
      case 'JP':
        return 'ja_JP';
        break;
      case 'GE':
        return 'ka_GE';
        break;
      case 'KZ':
        return 'kk_KZ';
        break;
      case 'KR':
        return 'ko_KR';
        break;
      case 'LT':
        return 'lt_LT';
        break;
      case 'LV':
        return 'lv_LV';
        break;
      case 'ME':
        return 'me_ME';
        break;
      case 'MN':
        return 'mn_MN';
        break;
      case 'MY':
        return 'ms_MY';
        break;
      case 'NO':
        return 'nb_NO';
        break;
      case 'NP':
        return 'ne_NP';
        break;
      case 'BE':
        return 'nl_BE';
        break;
      case 'NL':
        return 'nl_NL';
        break;
      case 'PL':
        return 'pl_PL';
        break;
      case 'BR':
        return 'pt_BR';
        break;
      case 'PT':
        return 'pt_PT';
        break;
      case 'MD':
        return 'ro_MD';
        break;
      case 'RO':
        return 'ro_RO';
        break;
      case 'RU':
        return 'ru_RU';
        break;
      case 'SK':
        return 'sk_SK';
        break;
      case 'SI':
        return 'sl_SI';
        break;
      case 'RS':
        return 'sr_Cyrl_RS';
        break;
      case 'RS':
        return 'sr_Latn_RS';
        break;
      case 'RS':
        return 'sr_RS';
        break;
      case 'SE':
        return 'sv_SE';
        break;
      case 'TH':
        return 'th_TH';
        break;
      case 'TR':
        return 'tr_TR';
        break;
      case 'UA':
        return 'uk_UA';
        break;
      case 'VN':
        return 'vi_VN';
        break;
      case 'CN':
        return 'zh_CN';
        break;
      case 'TW':
        return 'zh_TW';
        break;
      default:
        return 'en_US';
    }
  }
  
  /**
   * Gets a sentence responding to the sentiment of the message received.
   *
   * @param string $previousWho
   * @param string $previousMessageId
   * @return string
   */
  public function getResponseToSentiment(string $previousWho, string $previousMessageId)
  {
    $who = ($previousWho === 'user') ? 'wanda' : 'user';
    $sentiments = __("chats/common.{$who}.sentimentResponses");
    
    foreach ($sentiments as $sentimentName => $sentiment) {
      if (strpos(strtolower($previousMessageId), strtolower($sentimentName)) !== false) {
        return $sentiment[rand(0, count($sentiment) - 1)];
      }
    }
    
    return null;
  }
  
  /**
   * Gets a conjunction that's the beginning of a next sentence, based on the sentiment of the previous message.
   *
   * @param string $previousWho
   * @param string $previousMessageId
   * @return string
   */
  public function getConjunction(string $previousWho, string $previousMessageId)
  {
    $who = ($previousWho === 'user') ? 'wanda' : 'user';
    $conjunctions = __("chats/common.{$who}.conjunctions");
    
    foreach ($conjunctions as $conjunctionName => $conjunction) {
      if (strpos(strtolower($previousMessageId), strtolower($conjunctionName)) !== false) {
        return $conjunction[rand(0, count($conjunction) - 1)];
      }
    }
    
    return null;
  }
  
  /**
   * Gets a random entry from a selection of common responses.
   *
   * @param string $who
   * @param string $messageId
   * @param int $count
   * @return string
   */
  public function randomCommon(string $who, string $messageId, int $count = 1)
  {
    if ($count === 1) {
      return __("chats/common.{$who}.{$messageId}")[rand(0, count(__("chats/common.{$who}.{$messageId}")) - 1)];
    } else {
      $responses = __("chats/common.{$who}.{$messageId}");
      shuffle($responses);
      
      return array_slice($responses, 0, $count);
    }
  }
  
  /**
   * Gets the actual chat text from language file.
   *
   * @param string $scenario
   * @param string $who
   * @param string $messageId
   * @param array $chatData
   * @return string
   */
  public function getChat(string $scenario, string $who, string $messageId, array $chatData)
  {
    return __("chats/{$scenario}.{$who}.{$messageId}", $chatData);
  }
  
  /**
   * Gets the actual chat text from language file for Wanda.
   *
   * @param string $scenario
   * @param string $messageId
   * @param array $chatData
   * @return string
   */
  public function getWandaChat(string $scenario, string $messageId, array $chatData)
  {
    return $this->getChat($scenario, 'wanda', $messageId, $chatData);
  }
  
  /**
   * Gets the actual chat text from language file for the user (for multiple choice options).
   *
   * @param string $scenario
   * @param string $messageId
   * @param array $chatData
   * @return string
   */
  public function getUserChat(string $scenario, string $messageId, array $chatData)
  {
    return $this->getChat($scenario, 'user', $messageId, $chatData);
  }
  
  /**
   * Gets an array of chat text for the user (for multiple choice options) for an interaction.
   *
   * @param string $scenario
   * @param array $interaction
   * @param string $previousUserMessageId
   * @return array
   */
  public function getInteractionUserChats(string $scenario, array $interaction, string $previousUserMessageId)
  {
    $userMessages = [];
    $type = array_get($interaction, 'type');
    $chatData = $this->getChatData($previousUserMessageId);
    
    if (!in_array($type, ['doLogin', 'none', 'signupEmail', 'signupMobileNumber', 'signupName', 'signupPassword', 'text'])) {
      foreach (array_get($interaction, 'user') as $userResponse) {
        $userMessages[$userResponse] = $this->getUserChat($scenario, $userResponse, $chatData);
      }
    } else {
      $userMessages[$interaction['user'][0]] = null;
    }
    
    return $userMessages;
  }
}
