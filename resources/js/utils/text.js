export const toTitleCase = text =>  {
  return text.replace(
    /\w\S*/g,
    function(cleanedText) {
      return cleanedText.charAt(0).toUpperCase() + cleanedText.substr(1).toLowerCase();
    }
  );
};
