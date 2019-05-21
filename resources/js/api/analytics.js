export const sendGoogleAnalyticsEvent = (scenario, sender, messageId, message) => {
  try {
    window.gtag('event', messageId, {
      'event_category': scenario,
      'event_label': message,
      'value': (sender === 'wanda' ? 0 : 1)
    });
  } catch (error) {
    console.log(`Google Analytics error: ${error}`);
  }
};
