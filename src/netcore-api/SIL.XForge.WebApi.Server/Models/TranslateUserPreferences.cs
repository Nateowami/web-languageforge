namespace SIL.XForge.WebApi.Server.Models
{
    public class TranslateUserPreferences
    {
        public double ConfidenceThreshold { get; set; }
        public bool HasConfidenceOverride { get; set; }
        public bool IsDocumentOrientationTargetRight { get; set; } = true;
        public bool IsFormattingOptionsShown { get; set; }
        public string SelectedDocumentSetId { get; set; } = "";
    }
}