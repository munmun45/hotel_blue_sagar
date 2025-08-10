-- SQL to add GST column to bookings table
ALTER TABLE bookings ADD COLUMN gst_provided TINYINT(1) DEFAULT 0;

-- Update any existing records to have GST provided as default
UPDATE bookings SET gst_provided = 1 WHERE gst_provided IS NULL;

-- Add an index for better query performance
ALTER TABLE bookings ADD INDEX idx_gst_provided (gst_provided);
